<?php

echo "
<html>
<head>
<title>AphroBall 7 - Weekly Winners/Losers</title>
<meta name=description content=\"\">
<meta name=keywords content=\"\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">
<META HTTP-EQUIV=\"Pragma\" CONTENT=\"no-cache\">
<META HTTP-EQUIV=\"Expires\" CONTENT=\"Thu, 1 Jan 1970 01:00:00 GMT\">

<style type=\"text/css\">
<!--
.gameTab { font-weight: bold; font-size:10pt; color:#cccccc; font-family:verdana}
.gameTab1 { font-weight: bold; font-size:10pt; color:#ff6600; font-family:verdana}
.bodyT { color:#333333}
.title7 {font-size:11pt; color:#ff6600; font-family:verdana}
.title9 {font-size:8pt; color:#000000; font-family:verdana}
.noline { text-decoration:none; color:#ff0000 }
.noline1 { text-decoration:none; color:#0000ff; font-family:verdana; font-size:9pt }
.archive {font-family:arial; font-size:9pt; color:orange}
.header1 {font-family:arial; font-size:9pt; color:purple}
.header2 {font-family:arial; font-size:9pt;}
.signature {font-family:brush script; font-size:20pt; color:blue;}
.signin {font-family:arial; font-size:9pt; color:purple}
//-->
</style>

<script>
function swapon1()
 {
      document.img1.src=\"../img07/navigr1.gif\";
 }
function swapoff1()
 {
      document.img1.src=\"../img07/navig1.gif\";
 }

function swapon2()
 {
      document.img2.src=\"../img07/navigr2.gif\";
 }
function swapoff2()
 {
      document.img2.src=\"../img07/navig2.gif\";
 }

function swapon3()
 {
      document.img3.src=\"../img07/navigr3.gif\";
 }
function swapoff3()
 {
      document.img3.src=\"../img07/navig3.gif\";
 }

function swapon4()
 {
      document.img4.src=\"../img07/navigr4.gif\";
 }
function swapoff4()
 {
      document.img4.src=\"../img07/navig4.gif\";
 }

function swapon5()
 {
      document.img5.src=\"../img07/navigr5.gif\";
 }
function swapoff5()
 {
      document.img5.src=\"../img07/navig5.gif\";
 }

function swapon6()
 {
      document.img6.src=\"../img07/navigr6.gif\";
 }
function swapoff6()
 {
      document.img6.src=\"../img07/navig6.gif\";
 }

function swapon7()
 {
      document.img7.src=\"../img07/navigr7.gif\";
 }
function swapoff7()
 {
      document.img7.src=\"../img07/navig7.gif\";
 }

function swapon8()
 {
      document.img8.src=\"../img07/navigr8.gif\";
 }
function swapoff8()
 {
      document.img8.src=\"../img07/navig8.gif\";
 }

function swapon9()
 {
      document.img9.src=\"../img07/navigr9.gif\";
 }
function swapoff9()
 {
      document.img9.src=\"../img07/navig9.gif\";
 }
</script>
<script language=\"Javascript\" src=\"weeklyScores.js\">

</script>
";
include_once("analyticstracking.php");
echo "

</head>";



echo "

<body topmargin=\"0\" leftmargin=\"0\" marginwidth=0 marginheight=0 >
<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" height=\"100%\">
  <tr>
    <td background=\"../img07/tstile43241.gif\" align=\"left\" valign=\"bottom\" width=\"100%\"><img src=\"../img07/topstrip43241.gif\" width=\"780\" height=\"15\"></td>
  </tr>
  <tr>
    <td width=\"100%\" valign=\"top\" height=\"100%\">
      <!-- Table 2: Outlines the majority of the content -->
      <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
        <tr>
          <td valign=\"top\"><img border=\"0\" src=\"../img07/image3.jpg\" name=\"im4\" width=\"193\" height=\"154\"></td>
          <td valign=\"top\" align=\"left\" width=\"100%\">
            <div align=\"left\">
              <!-- Table 3: This table houses the title and slogan, also has the login information -->
              <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                <tr>
                  <td rowspan=\"3\" valign=\"top\"><img border=\"0\" src=\"../img07/midbox43241.gif\" width=\"87\" height=\"101\"></td>
                  <td background=\"../img07/comptile43241.gif\" align=\"left\" width=\"100%\"><img border=\"0\" src=\"../img07/compname1.gif\" name=\"im1\" width=\"500\" height=\"42\"></td>
                </tr>
                <tr>
                  <td background=\"../img07/stile43241.gif\" align=\"left\" width=\"100%\"><img border=\"0\" src=\"../img07/slogan1.gif\" name=\"im2\" width=\"500\" height=\"30\"></td>
                </tr>
                <tr>
                  <td background=\"../img07/buttile43241.gif\" width=\"100%\" height=\"29\" align=right>&nbsp;";
printf("<font size=-1 color=#ffffff>Welcome <b>%s</b> /</font>
         <font size=-2 color=#ffffff><b>[<a href=\"logout.php\" class=noline>LogOut</a>]</b></font> &nbsp;", $_COOKIE['User']);

echo "
                  </td>
                </tr>
                <tr>
                  <td width=\"100%\" colspan=\"2\" align=\"right\"><img border=\"0\" src=\"../img07/email.gif\" name=\"im3\" width=\"350\" height=\"21\">

                  </td>
                </tr>
              </table>
              <!-- End Table 3 -->
            </div>
          </td>
        </tr>
        <tr>
          <td valign=\"top\" align=\"left\">
            <!-- Table 4:  This is the table for the menu on the left -->
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
            <tr>
              <td><a href=\"aphrohome.php\"  onclick=\"return true\" onMouseOver=\"swapon1()\" onMouseOut=\"swapoff1()\"><img src=\"../img07/navig1.gif\" width =\"163\" height=\"46\" border=\"0\" name=\"img1\"></a></td>
            </tr>
            <tr>
              <td><a href=\"rules.php\"  onclick=\"return true\" onMouseOver=\"swapon2()\" onMouseOut=\"swapoff2()\"><img src=\"../img07/navig2.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"img2\"></a></td>
            </tr>
            <tr>
              <td><a href=\"blog.php\"  onclick=\"return true\" onMouseOver=\"swapon3()\" onMouseOut=\"swapoff3()\"><img src=\"../img07/navig3.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"img3\"></a></td>
            </tr>
            <tr>
              <td><a href=\"week.php\"  onclick=\"return true\" onMouseOver=\"swapon4()\" onMouseOut=\"swapoff4()\"><img src=\"../img07/navig4.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"img4\"></a></td>
            </tr>
            <tr>
              <td><a href=\"results.php\"  onclick=\"return true\" onMouseOver=\"swapon5()\" onMouseOut=\"swapoff5()\"><img src=\"../img07/navig5.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"img5\"></a></td>
            </tr>
            <tr>
              <td><a href=\"performance.php\"  onclick=\"return true\" onMouseOver=\"swapon6()\" onMouseOut=\"swapoff6()\"><img src=\"../img07/navig6.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"img6\"></a></td>
            </tr>
            <tr>
              <td><a href=\"members.php\"  onclick=\"return true\" onMouseOver=\"swapon7()\" onMouseOut=\"swapoff7()\"><img src=\"../img07/navig7.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"img7\"></a></td>
            </tr>
            <tr>
              <td><a href=\"na.php\"  onclick=\"return true\" onMouseOver=\"swapon8()\" onMouseOut=\"swapoff8()\"><img src=\"../img07/navig8.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"img8\"></a></td>
            </tr>
            <tr>
              <td><a href=\"na.php\"  onclick=\"return true\" onMouseOver=\"swapon9()\" onMouseOut=\"swapoff9()\"><img src=\"../img07/navig9.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"img9\"></a></td>
            </tr>";
if ($week == NULL) {
   include("resultSelector.inc");
}
include 'scoreBoard.php';

echo "
	        </table>
	        <!-- End Table 4 (Menu) -->
            &nbsp;</td>

          <td valign=\"top\" align=\"center\" width=\"100%\">
            <div align=\"center\">
            <center>
            <!-- Table 5: Start of the main body -->
            <table border=\"0\" cellpadding=\"0\" cellspacing=\"30\" width=\"100%\">
            <tr>
              <td width=\"100%\">";

$sub  = $_POST['submit'];
$go   = $_POST['weekSub'];
$week = $_POST["week"];


if (!$go) {
echo "
              <form method=POST name=games action=\"$PHP_SELF\">";

   echo "<center>";
   echo "<table width=300 border=0>
<tr>
   <td>Select a week to enter results:</td>
   <td><select name=\"week\">
       <option value=\"1\">Week 1</option>
       <option value=\"2\">Week 2</option>
       <option value=\"3\">Week 3</option>
       <option value=\"4\">Week 4</option>
       <option value=\"5\">Week 5</option>
       <option value=\"6\">Week 6</option>
       <option value=\"7\">Week 7</option>
       <option value=\"8\">Week 8</option>
       <option value=\"9\">Week 9</option>
       <option value=\"10\">Week 10</option>
       <option value=\"11\">Week 11</option>
       <option value=\"12\">Week 12</option>
       <option value=\"13\">Week 13</option>
       <option value=\"14\">Week 14</option>
       <option value=\"15\">Week 15</option>
       <option value=\"16\">Week 16</option>
       <option value=\"17\">Week 17</option></select> </td>
   <td><input type=submit name=\"weekSub\" value=\"Go\">
</tr>
</table></center>
</form>";
}

// do this if only after the form has been submitted.
if ($sub) {

    echo "Return to <a href=\"administration.php\">Administration Page</a><br><br>\n";

   //open database
   //$db = mysql_connect("localhost", "root", "hoosier");
   //mysql_select_db("aphroball_2015",$db);
   include 'database.php';

   // get the variables that only need to be read in once
   $nGames = $_POST['num_games'];
   $wk     = $_POST['week'];

   // loop through the form values and enter them into the database.
   for ($j=1;$j<=$nGames;$j++) {

       // open database to get the schedule and who is playing the jth game
       $teamsj = mysql_query("SELECT * FROM schedule2015 WHERE week=\"$wk\"
                    AND gamenum=\"$j\"", $db);
       $row = mysql_fetch_array($teamsj);
       $vis     = $row["visitor"];
       $home    = $row["home"];
       $visVal  = $_POST["$vis"];
       $homeVal = $_POST["$home"];

       $x2  = "vispoints$j";
       $x3  = "homepoints$j";
       $visPts  = $_POST["$x2"];
       $homePts = $_POST["$x3"];

       if ($homeVal == "W") {
          $win = mysql_query("UPDATE schedule2015 SET winner=\"$home\", loser=\"$vis\",
                                 vispoints=\"$visPts\", homepoints=\"$homePts\" WHERE
                                 week=\"$wk\" AND gamenum=\"$j\"");
          echo "HomeTeam: $home($homeVal)    Home Pts: $homePts<br>\n";
          echo "VisTeam: $vis($visVal)    Visitor Pts: $visPts<br><br>\n";

          //store the winner and the margin in an array
          $actualWinner[$j] = $home;
          $actualLoser[$j]  = $vis;
          $actualSpread[$j] = ($homePts - $visPts);
       }
       else if ($visVal == "W") {
          $win = mysql_query("UPDATE schedule2015 SET winner=\"$vis\", loser=\"$home\",
                                 vispoints=\"$visPts\", homepoints=\"$homePts\" WHERE
                                 week=\"$wk\" AND gamenum=\"$j\"");
          echo "HomeTeam: $home($homeVal)    Home Pts: $homePts<br>\n";
          echo "VisTeam: $vis($visVal)    Visitor Pts: $visPts<br><br>\n";

          //store the winner and the margin in an array
          $actualWinner[$j] = $vis;
          $actualLoser[$j]  = $home;
          $actualSpread[$j] = ($visPts - $homePts);

       }
       else {
          echo "There was no team specified as the winner for the $vis vs. $home game.<br>\n";
          $queryQ = mysql_query("SELECT * FROM schedule2015 where week=\"$wk\" order by gamenum", $db);
          //need to cycle through entries until the correct game is reached.
          for ($z=1;$z<=$j;$z++) {
              $query  = mysql_fetch_array($queryQ);
          }
          $actualWinner[$j] = $query["winner"];
          $actualLoser[$j]  = $query["loser"];
          $visp             = $query["vispoints"];
          $homep            = $query["homepoints"];
          $actualSpread[$j] = abs($visp - $homep);
          //printf("Winner: %s    Loser: %s   Spread: %s<br>",  $actualWinner[$j], $actualLoser[$j],
                                                          //$actualSpread[$j]);
       }

   }

   //determine the total points possible for this week
   $ptsAvailable = mysql_query("SELECT * FROM schedule2015 WHERE week=\"$week\"",$db);
   $ptsL = mysql_fetch_array($ptsAvailable);
   $wkSpread = 0;
   for($z=1;$z<=$nGames;$z++) {
      $wkSpread += abs($ptsL["vispoints"] - $ptsL["homepoints"]);
      $ptsL = mysql_fetch_array($ptsAvailable);
   }
   mysql_query("UPDATE availablePoints SET total=\"$wkSpread\" WHERE week=\"$week\"",$db);
   echo "Total Points for week $week:  $wkSpread<br><br>\n";


   // get a list of all the players from the admin table
   $playersQ = mysql_query("SELECT * FROM admin", $db);
   $players  = mysql_fetch_array($playersQ);
   $counter  = 1;
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

        $picksQ = mysql_query("SELECT * FROM $id WHERE week=\"$wk\" order by game", $db);
        $picks  = mysql_fetch_array($picksQ);
        do {
            $pickW = $picks["winner"];
            $pickS = $picks["spread"];

	    //printf("%s<br>", $actualWinner[$counter]);
            if ($actualWinner[$counter] == "") {
                // do nothing, game has not yet been played
		//$dUpdate = 0;
            }
            else if ($actualWinner[$counter] == $pickW) {
               //player selected the winner, now check the spread
               if ($actualSpread[$counter] >= $pickS) {
                   // player made the pick;
                   mysql_query("UPDATE $id SET made=\"1\", missed=\"0\", missSpread=\"0\" WHERE
                               week=\"$wk\" AND winner=\"$pickW\"", $db);
               } else {
                   // player did not make the spread
                   mysql_query("UPDATE $id SET made=\"0\", missed=\"0\", missSpread=\"1\" WHERE
                               week=\"$wk\" AND winner=\"$pickW\"", $db);
               }
            } else {
                //player did not pick the right team
		   //if ($dUpdate = 1) {
                       mysql_query("UPDATE $id SET made=\"0\", missed=\"1\", missSpread=\"0\" WHERE
                               week=\"$wk\" AND winner=\"$pickW\"", $db);
                   //}
		   //$dUpdate = 1;
            }

            $counter++;
        } while ($picks = mysql_fetch_array($picksQ));

        // reset the counter
        $counter = 1;

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
         $userPtsW  = mysql_query("SELECT sum(spread) FROM $openDB WHERE made=\"1\" and week=\"$wk\"",$db);
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
                    $checkerQ = mysql_query("SELECT * FROM $rnkArray WHERE week=\"$wk\"", $db);
                    $checker  = mysql_fetch_array($checkerQ);

                    $rnk = $i + 1;
                    //echo "$rnkArray=$rnk<br>";
                    if ($checker["week"]) {
                       $ins = mysql_query("UPDATE $rnkArray SET rank=\"$rnk\", points=\"$tp\", percentage=\"$percS\"
                               WHERE week=\"$wk\"", $db);
                    }
                    else {
                       $ins = mysql_query("INSERT INTO $rnkArray VALUES ($wk, $rnk, 0, $tp, 0, $percS, 0)", $db);
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
                                percentageW=\"$percW\" WHERE week=\"$wk\"", $db);

                }

            }
         }  // end of 'j' for loop

     }  // end of 'i' for loop

}

// if the form hasn't been submitted, do the else
else if (($_COOKIE['User'] == "milnuts") || ($_COOKIE['User'] == "vwal") || ($_COOKIE['User'] == "freckman")) {
   // include the array of teams and logos
   include("teamArray.inc");

   //open database
   //$db = mysql_connect("localhost", "root", "hoosier");
   //mysql_select_db("aphroball_2015",$db);
   include 'database.php';

   // what week it is
   //$week = 1;
   $result = mysql_query("SELECT * FROM schedule2015 WHERE week=\"$week\" order by gamenum",$db);

   $num_games = mysql_num_rows($result);
echo "
              <form method=POST name=fullform action=\"$PHP_SELF\">
              <center>
              <h1>Outcome for Week $week</h1></center>
              <center>
              <table width=700 border=0 cellspacing=0 cellpadding=0>\n";
   if ($row = mysql_fetch_array($result)) {

   }

   echo "
              <tr>
                 <td align=center><table border=0 cellspacing=0 cellpadding=0>\n";

   // do this for loop to print out a row for every game on the schedule
   for ($i=1;$i<=$num_games;$i++) {
       // pick a color for the row
       if(($i % 2) == 0) { $rowcol = "#9999CC"; }
       else { $rowcol = "#CCCCCC"; }

        // get the points for and points against for the home team.
        $ht = $row["home"];
        $homeTeam  = mysql_query("SELECT sum(vispoints), sum(homepoints) FROM schedule2015 WHERE
                                 visitor=\"$ht\"", $db);
        $homeTeam1 = mysql_query("SELECT sum(vispoints), sum(homepoints) FROM schedule2015 WHERE
                                 home=\"$ht\"", $db);
        $hf  = mysql_fetch_array($homeTeam);
        $hf1 = mysql_fetch_array($homeTeam1);
        $pointsFor     = $hf[0] + $hf1[1];
        $pointsAgainst = $hf[1] + $hf1[0];

        // get the points for and points against for the current teams.
        $vt = $row["visitor"];
        $visTeam  = mysql_query("SELECT sum(vispoints), sum(homepoints) FROM schedule2015 WHERE
                                 visitor=\"$vt\"", $db);
        $visTeam1 = mysql_query("SELECT sum(vispoints), sum(homepoints) FROM schedule2015 WHERE
                                 home=\"$vt\"", $db);
        $vf  = mysql_fetch_array($visTeam);
        $vf1 = mysql_fetch_array($visTeam1);
        $ptsFor     = $vf[0] + $vf1[1];
        $ptsAgainst = $vf[1] + $vf1[0];

        //Get the records for both the home and away teams
        $homeW = mysql_query("SELECT winner FROM schedule2015 WHERE winner=\"$ht\"", $db);
        $homeL = mysql_query("SELECT loser FROM schedule2015 WHERE loser=\"$ht\"", $db);
        $hw    = mysql_num_rows($homeW);
        $hl    = mysql_num_rows($homeL);
        $awayW = mysql_query("SELECT winner FROM schedule2015 WHERE winner=\"$vt\"", $db);
        $awayL = mysql_query("SELECT loser FROM schedule2015 WHERE loser=\"$vt\"", $db);
        $aw    = mysql_num_rows($awayW);
        $al    = mysql_num_rows($awayL);

          // begin printing out the schedule
          printf("
                     <tr bgcolor=\"$rowcol\">
                       <td><img src=\"../images/%s\"></td>
                       <td><b><font size=-1>W/L</font></b><br>
                          <input type=\"text\" name=\"%s\" value=\"\" size=1 onchange=\"display()\"></td>
                       <td><b>%s</b><br>   Rec($aw-$al)<br>  PF($ptsFor) PA($ptsAgainst)</td>
                       <td>&nbsp;</td>
                       <td><input type=text size=2 name=\"vispoints$i\">
                       <td>&nbsp;</td>
                       <td><center>at</center></td>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                       <td><img src=\"../images/%s\"></td>
                       <td><b><font size=-1>W/L</font></b><br>
                          <input type=\"text\" name=\"%s\" value=\"\" size=1 onchange=\"display()\"></td>
                       <td><b>%s</b><br>   Rec($hw-$hl)<br>  PF($pointsFor) PA($pointsAgainst)</td>
                       <td>&nbsp;</td>
                       <td>&nbsp;</td>
                       <td><input type=text size=2 name=\"homepoints$i\"></td>
                       <td>&nbsp;</td>
                     </tr>\n",
                $teampic[$row["visitor"]], $row["visitor"], $team[$row["visitor"]],
                $teampic[$row["home"]], $row["home"], $team[$row["home"]]);

       $row = mysql_fetch_array($result);
   }

   echo "                     </table></td>\n";     ?>
              </tr>
              <tr>
                 <td><br>&nbsp;<br>
                 <center>
                 <input type=hidden name="week" value="<?= $week ?>">
                 <input type=hidden name="num_games" value="<?= $num_games ?>">
                 <input type=submit name="submit" value="Submit Scores"> &nbsp; <input type=reset></center></td>
              </tr>
              </table></form>
              </center>
<? mysql_close($db);

}
else {
   echo "<center>You aren't <b>milnuts</b> or <b>vwal</b>, so GET OUT OF HERE.<br>
         Go to <a href=\"aphrohome.php\">AphroBall Home</a></center>";
}

?>
              </td>
            </tr>
            </table>
            <!-- End Table 5 (Body) -->
            </center>
            </div>
            <p>&nbsp;
          </td>
        </tr>
      </table>
      <!-- End Table 2 -->
    </td>
  </tr>
</table>


</body>


</html>
