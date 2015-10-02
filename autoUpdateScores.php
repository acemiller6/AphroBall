<?php
$ssfile = 'http://www.nfl.com/liveupdate/scorestrip/ss.xml';
//$ssfile = './ss.xml';
$localXML = './weekly.xml';
$nflScores = file_get_contents($ssfile);
file_put_contents($localXML, $nflScores);
//$file = "./ss.xml";
//if(file_exists('./ss.xml')) {
  //$xml  = simplexml_load_file('./ss.xml');
if(file_exists($localXML)) {
  $xml  = simplexml_load_file($localXML);
  //print_r($xml);

  // echo "$xml->gms[0]['w']\n";
  // echo "$xml->@attributes\n";
  // echo "$xml->w\n";
  $i = 0;
  foreach($xml->gms[0]->attributes() as $a => $b) {
    echo $a, '="',$b,"\"\n";
    $var[$i] = $a;
    $val[$i] = $b;
    $i++;
  }

  for($m=0;$m<$i;$m++){
    //echo "<br>" . $var[$m] . " = " . $val[$m] . "<br>";
    if($var[$m] == "w") {
      echo "<br>we found the week $val[$m]<br>";
      $week = $val[$m];
    }
  }

  //open the database
  include 'database.php';
  $result = mysql_query("SELECT * FROM schedule2015 WHERE week=\"$week\" order by gamenum",$db);
  $num_games = mysql_num_rows($result);

  for($i=0;$i<$num_games;$i++) {
    echo "<br>";
    $home = $xml->gms[0]->g[$i]['h'];
    $vis = $xml->gms[0]->g[$i]['v'];
    $homePts = $xml->gms[0]->g[$i]['hs'];
    $visPts = $xml->gms[0]->g[$i]['vs'];
    $status = $xml->gms[0]->g[$i]['q'];

    //only enter here if the game is openssl_verify
    if($status == "F" || $status == "FO") {
      //housekeeping, change JAC to JAX, NE to NWE to be compatible with my similar_text
      if ($home == "JAC") { $home = "JAX"; }
      elseif ($vis == "JAC") { $vis = "JAX"; }
      if ($home == "NE") { $home = "NWE"; }
      elseif ($vis == "NE") { $vis = "NWE"; }
      if ($home == "ARI") { $home = "ARZ"; }
      elseif ($vis == "ARI") { $vis = "ARZ"; }

      //see what the score differential was
      $score = $homePts - $visPts;
      $gm = $i+1;

      //check to see if the home team won
      if ($score > 0) {
        $win = mysql_query("UPDATE schedule2015 SET winner=\"$home\", loser=\"$vis\",
                               vispoints=\"$visPts\", homepoints=\"$homePts\" WHERE
                               week=\"$week\" AND gamenum=\"$gm\"");
        echo "HomeTeam: $home   Home Pts: $homePts<br>\n";
        echo "VisTeam: $vis     Visitor Pts: $visPts<br><br>\n";

        //store the winner and the margin in an array
        $actualWinner[$i] = $home;
        $actualLoser[$i]  = $vis;
        $actualSpread[$i] = ($homePts - $visPts);

      }
      elseif ($score < 0) {
        $win = mysql_query("UPDATE schedule2015 SET winner=\"$vis\", loser=\"$home\",
                               vispoints=\"$visPts\", homepoints=\"$homePts\" WHERE
                               week=\"$week\" AND gamenum=\"$gm\"");
        echo "HomeTeam: $home    Home Pts: $homePts<br>\n";
        echo "VisTeam: $vis    Visitor Pts: $visPts<br><br>\n";

        //store the winner and the margin in an array
        $actualWinner[$i] = $vis;
        $actualLoser[$i]  = $home;
        $actualSpread[$i] = ($visPts - $homePts);

      }
      else {
        echo "you are screwed, can't account for a tie<br>";
      }
      echo "$vis ($vs) vs $home ($hs)<br>";
    }
    else { echo "Game is not over<br>"; }
  }
  echo "<br>";
} else {
  exit('Failed to open ' . $localXML);
}

//determine the total points possible for this week
$ptsAvailable = mysql_query("SELECT * FROM schedule2015 WHERE week=\"$week\"",$db);
$ptsL = mysql_fetch_array($ptsAvailable);
$wkSpread = 0;
for($z=1;$z<=$num_games;$z++) {
   $wkSpread += abs($ptsL["vispoints"] - $ptsL["homepoints"]);
   $ptsL = mysql_fetch_array($ptsAvailable);
}
mysql_query("UPDATE availablePoints SET total=\"$wkSpread\" WHERE week=\"$week\"",$db);
echo "Total Points for week $week:  $wkSpread<br><br>\n";

///////////////////////////////////////////////////////////////////////
/// This is where we start updating player scores
// get a list of all the players from the admin table
///////////////////////////////////////////////////////////////////////
$playersQ = mysql_query("SELECT * FROM admin", $db);
$players  = mysql_fetch_array($playersQ);
$counter  = 0;
$dUpdate  = 1;

//for every user, figure out whether or not they made the spread and update the
do {
     $id = $players["userid"];
     //if its the guest line, fetch the next user instead
     if ($id == "guest") {
        $players  = mysql_fetch_array($playersQ);
        $id = $players["userid"];
     }
     echo "Attempting to create results for <b>$id</b>...<br><br>";

     $picksQ = mysql_query("SELECT * FROM $id WHERE week=\"$week\" order by game", $db);
     $picks  = mysql_fetch_array($picksQ);
     do {
         $pickW = $picks["winner"];
         $pickS = $picks["spread"];

   //printf("%s<br>", $actualWinner[$counter]);
   printf("winner=%s   spread=%s<br>", $pickW, $pickS);
   printf("winner=%s   spread=%s<br><br>", $actualWinner[$counter], $actualSpread[$counter]);
         if ($actualWinner[$counter] == "") {
             // do nothing, game has not yet been played
 //$dUpdate = 0;
         }
         else if ($actualWinner[$counter] == $pickW) {
            //player selected the winner, now check the spread
            if ($actualSpread[$counter] >= $pickS) {
                // player made the pick;
                mysql_query("UPDATE $id SET made=\"1\", missed=\"0\", missSpread=\"0\" WHERE
                            week=\"$week\" AND winner=\"$pickW\"", $db);
            } else {
                // player did not make the spread
                mysql_query("UPDATE $id SET made=\"0\", missed=\"0\", missSpread=\"1\" WHERE
                            week=\"$week\" AND winner=\"$pickW\"", $db);
            }
         } else {
             //player did not pick the right team
    //if ($dUpdate = 1) {
                    mysql_query("UPDATE $id SET made=\"0\", missed=\"1\", missSpread=\"0\" WHERE
                            week=\"$week\" AND winner=\"$pickW\"", $db);
                //}
    //$dUpdate = 1;
         }

         $counter++;
     } while ($picks = mysql_fetch_array($picksQ));

     // reset the counter
     $counter = 0;

} while ($players = mysql_fetch_array($playersQ));




//this section of code will sort the rankings and put them into the rank table
//  it is a straight copy from the results.php file
$users = mysql_query("SELECT * FROM admin",$db);
$num_users = mysql_num_rows($users);

$cur_user = mysql_fetch_array($users);
$rank     = array();
$user     = array();
$rankW    = array();
$userW    = array();

//loop through this once for each number of users and get their scores for the week
for ($m=1;$m<=$num_users;$m++) {
   $openDB    = $cur_user["userid"];
   //echo "$openDB<br>";

   // if the 'guest' is signed in, we don't want to see his stats
   if ($openDB != "guest") {
      //this is the season rank
      $userPtsS  = mysql_query("SELECT sum(spread) FROM $openDB WHERE made=\"1\"",$db);
      $totPts    = mysql_fetch_array($userPtsS);
      //this is the weekly rank
      $userPtsW  = mysql_query("SELECT sum(spread) FROM $openDB WHERE made=\"1\" and week=\"$week\"",$db);
      $totPtsW   = mysql_fetch_array($userPtsW);

      //put the seasons pts at the top of the rank stack and user stack.
      array_unshift($rank, $totPts[0]);
      array_unshift($user, $openDB);
      //put the weekly pts at the top of the rank stack and user stack.
      array_unshift($rankW, $totPtsW[0]);
      array_unshift($userW, $openDB);

      $uPts[$openDB]  = $totPts[0];
      $uPtsW[$openDB] = $totPtsW[0];

      }

   // cycle to the next row in the array
   $cur_user = mysql_fetch_array($users);

}
// reverse sort the scores so that the highest is first
rsort($rank);
rsort($rankW);

//echo implode(",", $rank);
//echo "---";
//echo implode(",", $rankW);
//echo "<br>";

//****************************************************
//There are two sets of two large for loops here.  The first will sort on the season, the second will
// sort on the week rank.
  //loop through this once for each number of users, sort on SEASON
  //we have to subtract 1 from number of users because of the guest user in admin table
  //THIS IS THE FIRST LARGE NESTED FOR LOOP
  for ($i=0;$i<($num_users-1);$i++) {


     for ($j=0;$j<($num_users-1);$j++) {
         if ($rank[$i] == $uPts[$user[$j]]) {
             //echo "rank[$i]=$rank[$i]<br>";

             //if we already processed this person we don't want to print their info again
             if ($seen[$user[$j]] == NULL) {

                 $seen[$user[$j]] = 1;

                 $openDB    = $user[$j];

                 //retrieve the numbers from the database for wins and put in an array
                 $userMadeW = mysql_query("SELECT sum(made) FROM $openDB WHERE week=\"$week\"",$db);
                 $userMissW = mysql_query("SELECT sum(missed) FROM $openDB WHERE week=\"$week\"",$db);
                 $userSprW  = mysql_query("SELECT sum(missSpread) FROM $openDB WHERE week=\"$week\"",$db);
                 $userPtsW  = mysql_query("SELECT sum(spread) FROM $openDB WHERE week=\"$week\" AND made=\"1\"",$db);
                 $userMadeS = mysql_query("SELECT sum(made) FROM $openDB",$db);
                 $userMissS = mysql_query("SELECT sum(missed) FROM $openDB",$db);
                 $userSprS  = mysql_query("SELECT sum(missSpread) FROM $openDB",$db);
                 $userPtsS  = mysql_query("SELECT sum(spread) FROM $openDB WHERE made=\"1\"",$db);

                 //take the data from the array and put in a variable that we can use in HTML
                 $userMade  = mysql_fetch_array($userMadeW);
                 $userMiss  = mysql_fetch_array($userMissW);
                 $userSpr   = mysql_fetch_array($userSprW);
                 $userPts   = mysql_fetch_array($userPtsW);
                 $totMade   = mysql_fetch_array($userMadeS);
                 $totMiss   = mysql_fetch_array($userMissS);
                 $totSpr    = mysql_fetch_array($userSprS);
                 $totPts    = mysql_fetch_array($userPtsS);

                 if ($userPts[0] == NULL) {
                      $userPts[0] = 0;
                 }
                 if ($totPts[0] == NULL) {
                      $totPts[0] = 0;
                 }


                 //in case a future week is selected, protect against that.
                 if (($userMade[0] + $userMiss[0] + $userSpr[0]) == 0) {
                     $divisor = 1;
                 }
                 else {
                     $divisor = ($userMade[0] + $userMiss[0] + $userSpr[0]);
                 }

                 $percW = ($userMade[0] + $userSpr[0]) / ($divisor);

                 //in case no games have been played, protect against that also
                 if (($totMade[0] + $totMiss[0] + $totSpr[0]) == 0) {
                     $grandTotal = 1;
                 }
                 else {
                     $grandTotal = ($totMade[0] + $totMiss[0] + $totSpr[0]);
                 }
                // $percS = ($totMade[0] + $totSpr[0]) / ($totMade[0] + $totMiss[0] + $totSpr[0]);
                 $percS = ($totMade[0] + $totSpr[0]) / ($grandTotal);
                 $percW = number_format($percW, 3, '.', '');
                 $percS = number_format($percS, 3, '.', '');
                 //printf("%s-%s-%s-%s--%s<br>", $openDB, $totMade[0], $totMiss[0], $totSpr[0], $percS);

                 $rnkArray = $openDB . "_rk";
                 $tp = $totPts[0];

                 //determine if we've input the scores already.  if we have use UPDATE, if we
                 //  have not, use INSERT
                 $checkerQ = mysql_query("SELECT * FROM $rnkArray WHERE week=\"$week\"", $db);
                 $checker  = mysql_fetch_array($checkerQ);

                 $rnk = $i + 1;
                 //echo "$rnkArray=$rnk<br>";
                 if ($checker["week"]) {
                    $ins = mysql_query("UPDATE $rnkArray SET rank=\"$rnk\", points=\"$tp\", percentage=\"$percS\"
                            WHERE week=\"$week\"", $db);
                 }
                 else {
                    $ins = mysql_query("INSERT INTO $rnkArray VALUES ($week, $rnk, 0, $tp, 0, $percS, 0)", $db);
                 }

             }

         }
      }  // end of 'j' for loop

  }  // end of 'i' for loop


  //****************************************************
  //loop through this once for each number of users, sort on WEEK
  //we have to subtract 1 from number of users because of the guest user in admin table
  //THIS IS THE SECOND LARGE NESTED FOR LOOP
  for ($i=0;$i<($num_users-1);$i++) {


     for ($j=0;$j<($num_users-1);$j++) {

         if ($rankW[$i] == $uPtsW[$userW[$j]]) {
             //echo "rankW[$i]=$rankW[$i]<br>";

             //if we already processed this person we don't want to print their info again
             if ($seenW[$userW[$j]] == NULL) {

                 $seenW[$userW[$j]] = 1;

                 $openDB    = $userW[$j];

                 //retrieve the numbers from the database for wins and put in an array
                 $userMadeW = mysql_query("SELECT sum(made) FROM $openDB WHERE week=\"$week\"",$db);
                 $userMissW = mysql_query("SELECT sum(missed) FROM $openDB WHERE week=\"$week\"",$db);
                 $userSprW  = mysql_query("SELECT sum(missSpread) FROM $openDB WHERE week=\"$week\"",$db);
                 $userPtsW  = mysql_query("SELECT sum(spread) FROM $openDB WHERE week=\"$week\" AND made=\"1\"",$db);
                 $userMadeS = mysql_query("SELECT sum(made) FROM $openDB",$db);
                 $userMissS = mysql_query("SELECT sum(missed) FROM $openDB",$db);
                 $userSprS  = mysql_query("SELECT sum(missSpread) FROM $openDB",$db);
                 $userPtsS  = mysql_query("SELECT sum(spread) FROM $openDB WHERE made=\"1\"",$db);

                 //take the data from the array and put in a variable that we can use in HTML
                 $userMade  = mysql_fetch_array($userMadeW);
                 $userMiss  = mysql_fetch_array($userMissW);
                 $userSpr   = mysql_fetch_array($userSprW);
                 $userPts   = mysql_fetch_array($userPtsW);
                 $totMade   = mysql_fetch_array($userMadeS);
                 $totMiss   = mysql_fetch_array($userMissS);
                 $totSpr    = mysql_fetch_array($userSprS);
                 $totPts    = mysql_fetch_array($userPtsS);

                 if ($userPts[0] == NULL) {
                      $userPts[0] = 0;
                 }
                 if ($totPts[0] == NULL) {
                      $totPts[0] = 0;
                 }

                 //in case a future week is selected, protect against that.
                 if (($userMade[0] + $userMiss[0] + $userSpr[0]) == 0) {
                     $divisor = 1;
                 }
                 else {
                     $divisor = ($userMade[0] + $userMiss[0] + $userSpr[0]);
                 }

                 $percW = ($userMade[0] + $userSpr[0]) / ($divisor);

                 //in case no games have been played, protect against that also
                 if (($totMade[0] + $totMiss[0] + $totSpr[0]) == 0) {
                     $grandTotal = 1;
                 }
                 else {
                     $grandTotal = ($totMade[0] + $totMiss[0] + $totSpr[0]);
                 }
                // $percS = ($totMade[0] + $totSpr[0]) / ($totMade[0] + $totMiss[0] + $totSpr[0]);
                 $percS = ($totMade[0] + $totSpr[0]) / ($grandTotal);
                 $percW = number_format($percW, 3, '.', '');
                 $percS = number_format($percS, 3, '.', '');

                 $rnkArray = $openDB . "_rk";
                 $up = $userPts[0];
                 $rnk = $i + 1;
                 //echo "$rnkArray=$rnk<br>";

                 $ins = mysql_query("UPDATE $rnkArray SET rankW=\"$rnk\", pointsW=\"$up\",
                             percentageW=\"$percW\" WHERE week=\"$week\"", $db);

             }

         }
      }  // end of 'j' for loop

  }  // end of 'i' for loop


?>
