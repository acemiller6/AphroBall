<?php

echo "
<html>
<head>
<title>AphroBall 7 - Make Your Picks</title>
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
.title5 { font-weight: bold; font-size:12pt; color:#ff6600; font-family:verdana}
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

// if the week variable is not set
if ($week == NULL) {
   include("resultSelector.inc");
}

include 'database.php';

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
                        <tr valign=\"top\">
                            <td height=\"25\">
                                &nbsp;
                            </td>
                        </tr>
                        <tr valign=\"top\">
                            <td height=\"25\">
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
                        </tr>
                        <tr valign=\"top\">
                            <td height=\"25\">
                                &nbsp;
                            </td>
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
              <td width=\"100%\"> ";

//check to see if a cookie is set.
$logged = $_COOKIE['User'];

if ($logged) {

   $sub            = $_POST['submit'];
   $go             = $_POST['weekSub'];
   $week           = $_POST["week"];
   $week_submitted = $_POST['week_sub'];
   $num_games      = $_POST['num_games'];
   $update         = $_POST['update'];

   // if the form was submitted, enter the data into the database
   if ($sub) {

echo "
                            <center><font color=\"orange\">
                            &nbsp;<br>&nbsp;<br><p>Your picks were submitted successfully.<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Your picks are in.<br><br><br><br><br><br><br><br><br><br><br><br>
                            <br><br><br><br><br><br><br><br><br><br><br><br> </center>
                            </font></center>";

      for ($i=1;$i<=$num_games;$i++) {

         // include the array of teams and logos
         include("teamArray.inc");
         //include("weekSelector.inc");

         //prepare the message for the email
         if ($i == 1) {
            $message = "Thanks for playing AphroBall.\nThese are your picks for Week $week\n
****************
This is an automated response so don't reply to this address
****************\n\n";
         }

         //load up the teams from the schedule database so I know who is home and visitor
         $sched = mysql_query("SELECT * FROM schedule2015 WHERE week=\"$week\" AND
                               gamenum=\"$i\"", $db);
         $sch   = mysql_fetch_array($sched);

         //set up vars to retrieve posted data
         $tm = "game$i";
         $sp = "spread$i";

         $winner = $_POST["$tm"];
         $spread = $_POST["$sp"];

         $player_pick = $sch["$winner"];

         //prepare the message for the email
         $message .= "You picked $player_pick to win by $spread\n";

         if ($update) {

            $ins = "UPDATE $logged SET winner=\"$player_pick\", spread=\"$spread\" WHERE
                   week=\"$week\" AND game=\"$i\"";
            $rc  = mysql_query($ins,$db);
        }
        else {

            $ins = "INSERT INTO $logged VALUES ('$week', '$i', '$player_pick', '$spread', 0, 0, 0, 0)";
            $rc  = mysql_query($ins,$db);

        }

      }

      //get the other needed variables for the email
      $emailQ = mysql_query("SELECT * FROM admin WHERE userid=\"$logged\"", $db);
      $email  = mysql_fetch_array($emailQ);
      $sendTo = $email["email"];
      $sendTo .= " ,aphropicks@aphroball.com";

      $subject = "$logged picks' for Week $week";
      $email_header  = "From: AphroBall Administration <aphroadmin@aphroball.com>\n";
      $email_header .= "Reply-To: aphroadmin@aphroball.com\n";
      $email_header .= "Content-transfer-encoding: 7bit\n";
      $email_header .= "Content-type: text/plain; charset=\"iso-8859-1\"\r\n";

      $message .= "\nYou can see your results at \nhttp://www.aphroball.com/AphroBall2015/aphrohome.php\n\n
      Picks submitted at ";

      $stamp = date('l F dS Y h:i:s A');
      $message .= $stamp;
      $message .= " PST";

      $rc = mail($sendTo, $subject, $message, $email_header);

   }

   // else prepare the page for the user to enter their picks
   else {

   // check to see if the cookie is set
   $val = $_COOKIE['User'];
   if (!isset($val)) {
      $_COOKIE['User'] = "Guest";
   }
   $newVal = $_COOKIE['User'];

      // include the array of teams and logos
      include("teamArray.inc");
      include("weekSelector.inc");
      //if the user has selected a week, do not use this automatic week selector
      if (isset($go)) {
          $week = $week_submitted;
      }

      // determine whether or not the week is locked
      if ($locked[$week] == 2) {
          $isLocked = "is partially locked";
          $noThurs = 1;
      }
      elseif ($locked[$week] == 1) {
          $isLocked = "is locked";
          $noSubmit = 1;
      }
      else {
          $isLocked = "";
          $noSubmit = 0;
      }

	include 'database.php';

	// what week it is
      //$week = 1;
      $result = mysql_query("SELECT * FROM schedule2015 WHERE week=\"$week\" order by gamenum",$db);

      $num_games = mysql_num_rows($result);
      echo "
                      <center>
                      <table border=0 width=650 bordercolor=\"#CCCCFF\" cellspacing=0 cellpadding=0><form method=POST action=\"$PHP_SELF\">
                      <tr>
                         <td colspan=15><span class=title5><center>NFL Week $week $isLocked</center></span></td>
                      </tr>
                      <tr>
                         <td>&nbsp;</td>
                      </tr>
                      <tr bgcolor=\"#ff6600\">

                         <td colspan=13>&nbsp;</td>
                         <td><b>Spread</b></td>
                         <td>&nbsp;</td>
                      </tr>";


      if ($row = mysql_fetch_array($result)) {


      }

      // do this for loop to print out a row for every game on the schedule
      for ($i=1;$i<=$num_games;$i++) {

           //somewhere along the line this got screwed up, and when the user's scores are entered
           //into their table, game 1 becomes game 15 and vice versa.  So to correct this, just
           //do some math   ---
           //$gameNum = ($num_games + 1) - $i;

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

           //Get records for the last five games
           $start  = ($week - 5);
           $end    = ($week - 1);
           if ($start < 1) { $start = 1; }
           $homeFW = mysql_query("SELECT winner FROM schedule2015 WHERE winner=\"$ht\" AND
                      week BETWEEN \"$start\" AND \"$end\"", $db);
           $homeFL = mysql_query("SELECT loser FROM schedule2015 WHERE loser=\"$ht\" AND
                      week BETWEEN \"$start\" AND \"$end\"", $db);
           $hfw    = mysql_num_rows($homeFW);
           $hfl    = mysql_num_rows($homeFL);
           $awayFW = mysql_query("SELECT winner FROM schedule2015 WHERE winner=\"$vt\" AND
                      week BETWEEN \"$start\" AND \"$end\"", $db);
           $awayFL = mysql_query("SELECT loser FROM schedule2015 WHERE loser=\"$vt\" AND
                      week BETWEEN \"$start\" AND \"$end\"", $db);
           $afw    = mysql_num_rows($awayFW);
           $afl    = mysql_num_rows($awayFL);

           //Get the home teams home record
           $homeRecW = mysql_query("SELECT * FROM schedule2015 WHERE home=\"$ht\" AND
                                 winner=\"$ht\"", $db);
           $homeRecL = mysql_query("SELECT * FROM schedule2015 WHERE home=\"$ht\" AND
                                 loser=\"$ht\"", $db);
           $hrw    = mysql_num_rows($homeRecW);
           $hrl    = mysql_num_rows($homeRecL);
           $awayRecW = mysql_query("SELECT * FROM schedule2015 WHERE visitor=\"$vt\" AND
                                 winner=\"$vt\"", $db);
           $awayRecL = mysql_query("SELECT * FROM schedule2015 WHERE visitor=\"$vt\" AND
                                 loser=\"$vt\"", $db);
           $arw    = mysql_num_rows($awayRecW);
           $arl    = mysql_num_rows($awayRecL);

           //echo "--$newVal--$week--$i<br>\n";
           //If the the player has already made selections, read them in and show them
           $userPickQ = mysql_query("SELECT * FROM $newVal WHERE week=\"$week\"
                                    AND game=\"$i\"",$db);
           $madePicks = mysql_num_rows($userPickQ);

           $homeWin = 0;
           $visWin  = 0;

           if ($madePicks) {
              $userPick  = mysql_fetch_array($userPickQ);
              if ($userPick["winner"] == $row["visitor"]) {
                  $visWin = 1;
              }
              else if ($userPick["winner"] == $row["home"]) {
                  $homeWin = 1;
              }
              $marg = $userPick["spread"];
              //printf("%s:%s:%s:%s:%s:", $visWin,$homeWin,$marg,$row["visitor"],$userPick["winner"]);
              //printf("%s<br>", $i);

              //if its after Thursday, we need to get rid of the radio buttons to select this game
              if(($i == 1)&&($noThurs == 1)) {
                // begin printing out the schedule
                printf("                      <tr bgcolor=\"$rowcol\">
                           <td><img src=\"../images/%s\"></td>
                           <td> </td>
                           <td><b>%s</b><br>   Rec($aw-$al)  PF($ptsFor) PA($ptsAgainst)<br>
                                   Last 5: ($afw-$afl) &nbsp; Road Rec($arw-$arl)</td>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><center>at</center></td>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><img src=\"../images/%s\"></td>
                           <td> </td>
                           <td><b>%s</b><br>   Rec($hw-$hl)  PF($pointsFor) PA($pointsAgainst)<br>
                                   Last 5: ($hfw-$hfl) &nbsp; Home Rec($hrw-$hrl)</td>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td> ",
                                   $teampic[$row["visitor"]],$team[$row["visitor"]],
                                   $teampic[$row["home"]],$team[$row["home"]]);
                if ($visWin || $homeWin) {
                   echo " $marg";
                }
                echo "></td>
                           <td>&nbsp;</td>
                        </tr>\n";

              }
              else {      // allow picking the Thursday game
                // begin printing out the schedule
                printf("                      <tr bgcolor=\"#$rowcol\">
                           <td><img src=\"../images/%s\"></td>
                           <td><input type=\"radio\" name=\"game$i\" value=\"visitor\"",
                   $teampic[$row["visitor"]]);
                if ($visWin) {
                  echo " checked";
                }
                printf ("></td>
                           <td><b>%s</b><br>   Rec($aw-$al)  PF($ptsFor) PA($ptsAgainst)<br>
                                   Last 5: ($afw-$afl) &nbsp; Road Rec($arw-$arl)</td>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><center>at</center></td>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><img src=\"../images/%s\"></td>
                           <td><input type=\"radio\" name=\"game$i\" value=\"home\"",
                                   $team[$row["visitor"]], $teampic[$row["home"]]);
                if ($homeWin) {
                  echo " checked";
                }
                printf("></td>
                           <td><b>%s</b><br>   Rec($hw-$hl)  PF($pointsFor) PA($pointsAgainst)<br>
                                   Last 5: ($hfw-$hfl) &nbsp; Home Rec($hrw-$hrl)</td>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><input type=text size=2 name=\"spread$i\"",
                                   $team[$row["home"]]);
                if ($visWin || $homeWin) {
                   echo " value=\"$marg\"";
                }
                echo "></td>
                           <td>&nbsp;</td>
                        </tr>\n";
              }
              // loop through the rows
              $row = mysql_fetch_array($result);

              $updateQ = 1;


          }

          // picks haven't been submitted yet, so print an empty week
          else {

            //if its after Thursday, we need to get rid of the radio buttons to select this game
            if(($i == 1)&&($noThurs == 1)) {
             // begin printing out the schedule
             printf("                            <tr bgcolor=\"$rowcol\">
                         <td><img src=\"../images/%s\"></td>
                         <td> </td>
                         <td><b>%s</b><br>   Rec($aw-$al)  PF($ptsFor) PA($ptsAgainst)<br>
                                 Last 5: ($afw-$afl) &nbsp; Road Rec($arw-$arl)</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td><center>at</center></td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td><img src=\"../images/%s\"></td>
                         <td> </td>
                         <td><b>%s</b><br>   Rec($hw-$hl)  PF($pointsFor) PA($pointsAgainst)<br>
                                 Last 5: ($hfw-$hfl) &nbsp; Home Rec($hrw-$hrl)</td>
                         <td>&nbsp;</td>
                         <td>&nbsp;</td>
                         <td> </td>
                         <td>&nbsp;</td>
                      </tr>\n",
                $teampic[$row["visitor"]],$team[$row["visitor"]], $teampic[$row["home"]],
                 $team[$row["home"]]);
             }
             else {// allow picking the Thursday game
               // begin printing out the schedule
               printf("                            <tr bgcolor=\"$rowcol\">
                           <td><img src=\"../images/%s\"></td>
                           <td><input type=\"radio\" name=\"game$i\" value=\"visitor\"> </td>
                           <td><b>%s</b><br>   Rec($aw-$al)  PF($ptsFor) PA($ptsAgainst)<br>
                                   Last 5: ($afw-$afl) &nbsp; Road Rec($arw-$arl)</td>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><center>at</center></td>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><img src=\"../images/%s\"></td>
                           <td><input type=\"radio\" name=\"game$i\" value=\"home\"> </td>
                           <td><b>%s</b><br>   Rec($hw-$hl)  PF($pointsFor) PA($pointsAgainst)<br>
                                   Last 5: ($hfw-$hfl) &nbsp; Home Rec($hrw-$hrl)</td>
                           <td>&nbsp;</td>
                           <td>&nbsp;</td>
                           <td><input type=text size=2 name=\"spread$i\"> </td>
                           <td>&nbsp;</td>
                        </tr>\n",
                  $teampic[$row["visitor"]],$team[$row["visitor"]], $teampic[$row["home"]],
                   $team[$row["home"]]);

             }
             // loop through the rows
             $row = mysql_fetch_array($result);

             $updateQ = 0;
         }
      }
      echo "                      </table>\n";     ?>
                      <br>&nbsp;<br>
                      <center>
                      <input type=hidden name="week" value="<?= $week ?>">
                      <input type=hidden name="num_games" value="<?= $num_games ?>">
                      <input type=hidden name="update" value="<?= $updateQ ?>">
            <?php
            if (!$noSubmit) { ?>
          <input type=submit name="submit" value="Submit Picks"> &nbsp; <input type=reset>
            <? } ?>
          </center>
      <? mysql_close($db) ?>
                </form></center>

<?php
   }
}

// if the user is not logged in
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
