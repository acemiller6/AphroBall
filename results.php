<?php

echo "
<html>
<head>
<title>AphroBall 7 - Results</title>
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
";
include_once("analyticstracking.php");
echo "

</head>";

	include 'database.php';

    if ($week == NULL) {
       include("resultSelector.inc");
    }
   //grab results out of the _rk array for the menu scoreboard
   $whichDB  = $_COOKIE['User'];
   $whichDB .= "_rk";
   $rQ   = mysql_query("SELECT * FROM $whichDB WHERE week=\"$week\"", $db);
   $r    = mysql_fetch_array($rQ);

   $rank    = $r["rank"];
   $rankW   = $r["rankW"];
   $points  = $r["points"];
   $pointsW = $r["pointsW"];
   $perc    = $r["percentage"];
   $percW   = $r["percentageW"];

echo "

<body topmargin=\"0\" leftmargin=\"0\" marginwidth=0 marginheight=0 >
<form name=\"user\" method=POST action=\"$PHP_SELF\" onsubmit=\"return CheckForm(this);\">
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
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>
             <table width=122 border=0>
             <form method=POST name=games action=\"$PHP_SELF\">
             <tr>
               <td>Week:</td>
             </tr>
             <tr>
               <td><select name=\"week_sub\">
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
             </table></form>
           </td>
        </tr>";

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

//check to see if a cookie is set.
$logged = $_COOKIE['User'];

if ($logged) {

   $go       = $_POST['weekSub'];
   $week_sub = $_POST['week_sub'];
   $week     = $_GET['week'];
   $show     = $_GET['show'];
   $rowColor = "#ffffff";

   $skip = 0;  // this will be used only when the season has not started

   //echo "go-$go<br>weekSub-$week_sub<br>";

   // include the array of teams and logos
   include("teamArray.inc");
   if ($week == NULL) {
      include("resultSelector.inc");
      //echo "<font color=white>Week=$week</font><br>";
   }

   if (isset($go)) {
       $week = $week_sub;
   }

   //see if the user has picked what to show
   if ($show == NULL) {
      $show = "week";
   }

   //stupid housekeeping here.  need to change week for the scoreBoard file, but
   //  then i need to change it back later.
   $a = $week;

   //grab results out of the _rk array for the menu scoreboard
   $whichDB  = $_COOKIE['User'];
   $whichDB .= "_rk";
   $w    = $week;
   //echo "a:$a <br>week:$week<br>";
   //echo "whichDB:$whichDB <br> w:$w<br>";

  // This was causing an infinite loop before the season started since
  //    the $whichDB table was empty.  Commenting out for now - 8/18/15
  //  do {
  //      $rQ   = mysql_query("SELECT * FROM $whichDB WHERE week=\"$w\"", $db);
  //      $r    = mysql_fetch_array($rQ);
   //
  //      $rank    = $r["rank"];
  //      $rankW   = $r["rankW"];
  //      $points  = $r["points"];
  //      $pointsW = $r["pointsW"];
  //      $perc    = $r["percentage"];
  //      $percW   = $r["percentageW"];
  //      $w--;
  //  } while($rank == NULL);

echo "
                     <table border=1 width=630>
                     <tr bgcolor=\"#efefe7\">
                         <th width=200>&nbsp; </th>
                         <th colspan=3><a href=\"results.php?week=$week&show=week\" class=noline>Week $week</a></th>
                         <th colspan=3><a href=\"results.php?week=$week&show=season\" class=noline>Season</a></th>
                     </tr>
                     <tr bgcolor=\"#efefe7\">
                         <th> &nbsp;</th>
                         <th>Record </th>
                         <th>Points </th>
                         <th>Perc. </th>
                         <th>Record </th>
                         <th>Points </th>
                         <th>Perc. </th>
                     </tr>";

   $users = mysql_query("SELECT * FROM admin",$db);
   $num_users = mysql_num_rows($users);
   //echo "<font color=green>number of users: $num_users</font><br>";

   $cur_user = mysql_fetch_array($users);
   $nrank     = array();
   $user     = array();
   $nrankW     = array();
   $userW     = array();

   //loop through this once for each number of users and get their scores for the week
   for ($m=1;$m<=$num_users;$m++) {
      $openDB    = $cur_user["userid"];
      //echo "<font color=green>$openDB<br></font>";

      // if the 'guest' is signed in, we don't want to see his stats
      if ($openDB != "guest") {
         $userPtsS  = mysql_query("SELECT sum(spread) FROM $openDB WHERE made=\"1\"",$db);
         $totPts    = mysql_fetch_array($userPtsS);
         $userPtsW  = mysql_query("SELECT sum(spread) FROM $openDB WHERE made=\"1\" AND week=\"$week\"",$db);
         $totPtsW   = mysql_fetch_array($userPtsW);

         //put the seasons pts at the top of the rank stack and user stack.
         array_unshift($nrank, $totPts[0]);
         array_unshift($user, $openDB);
         //put the weeks pts at the top of the rank stack and user stack.
         array_unshift($nrankW, $totPtsW[0]);
         array_unshift($userW, $openDB);

         $uPts[$openDB]  = $totPts[0];
         $uPtsW[$openDB] = $totPtsW[0];

         //check to see if the user made the picks or if they are the defaults
         $madePQ = mysql_query("SELECT * FROM $openDB WHERE week=\"$week\"", $db);
         $madeP  = mysql_fetch_array($madePQ);
         if ($madeP["picked"] == 1) {
            //user did not make their picks
            $dagger[$openDB] = "&dagger;";
         }
         else {
            $dagger[$openDB] = "";
         }
      }

      // cycle to the next row in the array
      $cur_user = mysql_fetch_array($users);

   }
   // reverse sort the scores so that the highest is first
   rsort($nrank);
   rsort($nrankW);

   //printf("rank=%s<br>", $nrank[0]);
   //check to see if the season has started, if not, we need to do this generic loop
   if ($nrank[0] == NULL) {
         for ($z=0;$z<($num_users-1);$z++) {

             $openDB    = $user[$z];
             //echo "$openDB<br>";
             //color the line for the logged in user
             if ($openDB == $_COOKIE['User']) {
                    $rowColor = "#ffffcc";
             }

             printf("
                 <tr bgcolor=\"%s\">
                   <td>&nbsp;<a href=\"userScore.php?user=%s&week=%s\"><b>%s</b></a> </td>
                   <td><center>0-0-0</center> </td>
                   <td><center>0</center> </td>
                   <td><center>0</center> </td>
                   <td><center>0-0-0</center> </td>
                   <td><center><b>0</b></center> </td>
                   <td><center>0</center> </td>
                 </tr>", $rowColor, $openDB, $week, $openDB);

             $rowColor = "#ffffff";

         }
         $skip = 1;
   }
///////////////////////////////////////////////////////////////////////////////
//check the show variable, determine whether the user whats to see order for
//  the week or the season.
// ORDER BY SEASON
///////////////////

   if ($show == "season") {

         //check to see how many games have been played, calculate results from that
         //$ngpQ = mysql_query("SELECT * FROM schedule2004 WHERE week=\"$week\" AND winner=\"\"",$db);
         //$ngp  = mysql_num_rows($ngpQ);
         //echo "Games not played= $ngp<br>";

         //loop through this once for each number of users
         //we have to subtract 1 from number of users because of the guest user in admin table
         for ($i=0;$i<($num_users-1);$i++) {


            for ($j=0;$j<($num_users-1);$j++) {
                if ($nrank[$i] == $uPts[$user[$j]]) {
                    //echo "rank[$i]=$rank[$i]<br>";

                    //set color for the rows
                    if ($rowColor == "#ffffff") { $rowColor = "#efefe7"; }
                    else { $rowColor = "#ffffff"; }

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

		        //if games haven't been played yet for a week, don't count them as a loss
		        //if ($ngp != 0) {
			    //$userMiss[0] = $userMiss[0] - $ngp;
			    //$totMiss[0]  = $totMiss[0] - $ngp;
                        //}

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

                        //color the line for the logged in user
                        if ($openDB == $_COOKIE['User']) {
                            $rowColor = "#ffffcc";
                        }

                        printf("
                     <tr bgcolor=\"%s\">
                       <td>&nbsp;<a href=\"userScore.php?user=%s&week=%s\"><b>%s</b></a> </td>
                       <td><center>%s-%s-%s</center> </td>
                       <td><center>%s %s</center> </td>
                       <td><center>%s</center> </td>
                       <td><center>%s-%s-%s</center> </td>
                       <td><center><b>%s</b></center> </td>
                       <td><center>%s</center> </td>
                     </tr>", $rowColor, $openDB, $week, $openDB, $userMade[0], $userMiss[0],
                             $userSpr[0], $userPts[0], $dagger[$openDB], $percW, $totMade[0],
                             $totMiss[0], $totSpr[0], $totPts[0], $percS);

                    }

                }
             }  // end of 'j' for loop

         }  // end of 'i' for loop

   }  // end of show season if loop
/////////////////////////////////////////////////////////////////////////////
//do the portion if the week is selected
// ORDER BY WEEK
///////////////////
   else {

         //check to see how many games have been played, calculate results from that
         //$ngpQ = mysql_query("SELECT * FROM schedule2006 WHERE week=\"$week\" AND winner=\"\"",$db);
         //$ngp  = mysql_num_rows($ngpQ);
         //echo "Games not played= $ngp<br>";

         //loop through this once for each number of users
         //we have to subtract 1 from number of users because of the guest user in admin table
         for ($i=0;$i<($num_users-1);$i++) {


            for ($j=0;$j<($num_users-1);$j++) {
                if ($nrankW[$i] == $uPtsW[$userW[$j]]) {
                    //echo "rank[$i]=$rank[$i]<br>";

                    //set color for the rows
                    if ($rowColor == "#ffffff") { $rowColor = "#efefe7"; }
                    else { $rowColor = "#ffffff"; }

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

		        //if games haven't been played yet for a week, don't count them as a loss
		        //if ($ngp != 0) {
			    //$userMiss[0] = $userMiss[0] - $ngp;
			    //$totMiss[0]  = $totMiss[0] - $ngp;
                        //}

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

                        //color the line for the logged in user
                        if ($openDB == $_COOKIE['User']) {
                            $rowColor = "#ffffcc";
                        }

                        //only do this if the season is started.
                        if (!$skip) {
                        printf("
                     <tr bgcolor=\"%s\">
                       <td>&nbsp;<a href=\"userScore.php?user=%s&week=%s\"><b>%s</b></a> </td>
                       <td><center>%s-%s-%s</center> </td>
                       <td><center>%s %s</center> </td>
                       <td><center>%s</center> </td>
                       <td><center>%s-%s-%s</center> </td>
                       <td><center><b>%s</b></center> </td>
                       <td><center>%s</center> </td>
                     </tr>", $rowColor, $openDB, $week, $openDB, $userMade[0], $userMiss[0],
                             $userSpr[0], $userPts[0], $dagger[$openDB], $percW, $totMade[0],
                             $totMiss[0], $totSpr[0], $totPts[0], $percS);
                        }
                    }

                }
             }  // end of 'j' for loop

         }  // end of 'i' for loop

   } // end of else loop


    echo "      </td>

                   </tr>
                   </table>";
     //determine the total points for this week
     $ptsWkq = mysql_query("SELECT * FROM availablePoints WHERE week=\"$week\"",$db);
     $ptsWk = mysql_fetch_array($ptsWkq);
     $ptsYrq = mysql_query("SELECT sum(total) FROM availablePoints",$db);
     $ptsYr = mysql_fetch_array($ptsYrq);

     printf("
     <table border=0 width=630>
     <tr>
        <td width=280 align=right>Weekly Points Available: </td>
        <td width=62 align=center><strong>%s</strong></td>
        <td width=137 align=right>Season: </td>
        <td width=64 align=center><strong>%s</strong></td>
        <td> </td>
     </tr>
     </table>", $ptsWk["total"], $ptsYr[0]);

    echo "
                   <table border=0 width=630>
                   <tr>
                      <td colspan=13><font color=\"#757575\"><b>Legend:</b><br>
                          &nbsp;&nbsp;<b>Record (x-y-z)</b><br>
                          &nbsp;&nbsp;&nbsp;&nbsp;x - number of correct picks  <br>
                          &nbsp;&nbsp;&nbsp;&nbsp;y - number of incorrect picks    <br>
                          &nbsp;&nbsp;&nbsp;&nbsp;z - number of correct picks, wrong spread <br>
                          &nbsp;&nbsp;<b>Perc</b> - percentage of time winning team is picked<br>
                          &nbsp;&nbsp;&dagger; - no picks made, received defaults</font>
                      </td>
                   </table> </center>";

}
// the user is not logged in
else {

echo "
                 <center><p>You are not logged in.  To access this page, please
                 <a href=\"aphrohome.php\">login</a> first.</center>
   ";
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

</form>
</body>


</html>
