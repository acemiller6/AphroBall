<?php

echo "
<html>
<head>
<title>AphroBall 7 - User Scores</title>
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

   // open the database
	include 'database.php';

   include 'resultSelector.inc';

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
</SCRIPT>\n<form name=\"user\" method=POST action=\"$PHP_SELF\" onsubmit=\"return CheckForm(this);\">
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

//check to see if a cookie is set.
$logged = $_COOKIE['User'];

if ($logged) {

  //  $go       = $_POST['weekSub'];
  //  $week_sub = $_POST['week_sub'];
   $user         = $_GET['user'];
   $week_sub     = $_GET['week'];
   $noSee        = 0;
   $thursOnly    = 0;
   //echo "user-$user   >> week-$week_sub<br>";

   // include the array of teams and logos
   include("teamArray.inc");
   //include("resultSelector.inc");

   // the user can look at his own picks though, so save this week.
  //  if ($go) {
       $checkWeek = $week_sub;
  //  }
  //  else {
  //     $checkWeek = $week;
  //  }

//   if (isset($go)) {
        include("weekSelector.inc");
        //include("resultSelector.inc");
        if ($locked[$week_sub] == 1) {
            $week = $week_sub;
        }
        else if (($week_sub == $checkWeek) && ($logged == $user)) {
            $week = $week_sub;
        }
        else if ($locked[$week_sub] == 2) {  //Let them see only the Thursday game
            $thursOnly = 1;
        }
        else {
            $noSee = 1;
        }
//   }

   $usersQ = mysql_query("SELECT * FROM admin ORDER BY userid", $db);
   $users  = mysql_fetch_array($usersQ);
   $ct     = mysql_num_rows($usersQ);

   //load up the teams from the schedule database so I know who is home and visitor
   $sched = mysql_query("SELECT * FROM schedule2015 WHERE week=\"$week\" order by gamenum", $db);
   $num_games = mysql_num_rows($sched);
   $row       = mysql_fetch_array($sched);

   //load up the users picks for the week
   $selectionsQ = mysql_query("SELECT * FROM $user WHERE week=\"$week\" order by game", $db);

printf("
                  <table border=0 width=650 bordercolor=\"#CCCCFF\" cellspacing=0 cellpadding=0><form method=POST action=\"$PHP_SELF\">
                  <tr>
                    <td colspan=10><span class=title5><center>$user's picks for Week $week</center></span></td>
                    <td colspan=3>
                      <select name=\"url\" onchange=\"window.location=this.value;\">
                        <option value=\"%s\">--------------</option>\n", $who, $who);

                        for($k=1;$k<=$ct;$k++) {
                            if ($users["userid"] == "guest") {
                                $users = mysql_fetch_array($usersQ);
                            }
                            else {
                                $userURL = "./userScore.php?user=" . $users["userid"] . "&week=" . $week;
                                printf("                           <option value=\"%s\">%s  </option>\n",
                                                  $userURL, $users["userid"]);
                                $users = mysql_fetch_array($usersQ);
                            }
                         }
echo "
                    </td>
                  </tr>
                  <tr>
                     <td>&nbsp;</td>
                  </tr>
                  <tr bgcolor=\"#0000FF\">
                     <td>&nbsp;</td>
                     <td>&nbsp;</td>
                     <td><font color=\"#FFFFFF\"><b>Your winner</b></font></td>
                     <td>&nbsp;</td>
                     <td>&nbsp;</td>
                     <td>&nbsp;</td>
                     <td>&nbsp;</td>
                     <td>&nbsp;</td>
                     <td>&nbsp;</td>
                     <td><font color=\"#FFFFFF\"><b>Your loser</b></font></td>
                     <td>&nbsp;</td>
                     <td>&nbsp;&nbsp;<font color=\"#FFFFFF\"><b>Margin</b></font> </td>
                     <td>&nbsp;</td>
                  </tr>\n";

     if (!$noSee) {

        if ($thursOnly == 1) {  $num_games = 1; }
        for ($i=1;$i<=$num_games;$i++) {

             // pick a color for the row
             if(($i % 2) == 0) { $rowcol = "#9999CC"; }
             else { $rowcol = "#CCCCCC"; }

             $picksQ = mysql_query("SELECT * FROM $user WHERE week=\"$week\"
                               AND game=\"$i\"", $db);
             $picks  = mysql_fetch_array($picksQ);

             //from schedule array
             //printf("Winner: %s   Loser: s", $picks["winner"]);
             if ($picks["made"] == 1) {
                  //$fontColor = "#4BFF4B";
                  $fontColor = "#33CC33";
             }
             else if ($picks["missed"] == 1) {
                  $fontColor = "#FF0000";
             }
             else if ($picks["missSpread"] == 1) {
                  $fontColor = "#FFFF00";
             }
             //enter this else if the game hasn't been played yet
             else if (($picks["made"] == 0) && ($picks["missed"] == 0) &&
                      ($picks["missSpread"] == 0)) {
                  $fontColor = "#000000";
             }

             //only the winner is in the user database, so figure out who the loser is
             if ($picks["winner"] == $row["home"]) {
                 $loser = $row["visitor"];
                 $winPts = $row["homepoints"];
                 $losePts = $row["vispoints"];
             } else {
                 $loser = $row["home"];
                 $winPts = $row["vispoints"];
                 $losePts = $row["homepoints"];
             }

          //check to see if the game has been played yet.
          if ($picks["winner"] == NULL) {
               $noGames = 1;
          }

          if ($noGames) {
          //this prints if games have not yet been played
          printf("
                  <tr bgcolor=\"$rowcol\">
                     <td><img src=\"../images/%s\"></td>
                     <td>&nbsp;</td>
                     <td>%s &nbsp;</td>
                     <td>0 &nbsp;</td>
                     <td><center>at </center></td>
                     <td>&nbsp;</td>
                     <td>&nbsp;</td>
                     <td><img src=\"../images/%s\"></td>
                     <td>&nbsp;</td>
                     <td>%s &nbsp;</td>
                     <td>0 &nbsp;</td>
                     <td>&nbsp;&nbsp;TBD </td>
                     <td>&nbsp;</td>
                  </tr>\n",
                $teampic[$row["visitor"]],$team[$row["visitor"]], $teampic[$row["home"]],
                 $team[$row["home"]]);
          }
          else {
          //this prints the outputs of the games if the week has started
          printf("
                  <tr bgcolor=\"$rowcol\">
                     <td><img src=\"../images/%s\"></td>
                     <td>&nbsp;</td>
                     <td><b><font color=$fontColor>%s </font></b>&nbsp;</td>
                     <td><b><font color=$fontColor>%s </font></b>&nbsp;</td>
                     <td><center>over </center></td>
                     <td>&nbsp;</td>
                     <td>&nbsp;</td>
                     <td><img src=\"../images/%s\"></td>
                     <td>&nbsp;</td>
                     <td><b><font color=$fontColor>%s </font></b>&nbsp;</td>
                     <td><b><font color=$fontColor>%s </font></b>&nbsp;</td>
                     <td>&nbsp;&nbsp;by %s </td>
                     <td>&nbsp;</td>
                  </tr>\n",
                $teampic[$picks["winner"]],$team[$picks["winner"]], $winPts, $teampic[$loser],
                 $team[$loser], $losePts, $picks["spread"]);

          }

          $noGames = 0;
          $row = mysql_fetch_array($sched);
        }
        echo "
                  <tr>
                     <td>&nbsp;</td>
                  </tr>
                  <tr>
                     <td colspan=13><b>Legend:</b><br>
                        <table border=0 bgcolor=#cccccc>
                        <tr>
                           <td><font color=\"#33CC33\"><b>Green</b></font>: </td>
                           <td> These games were picked correctly.</td>
                        </tr>
                        <tr>
                           <td><font color=\"#FFFF00\"><b>Yellow</b></font>: </td>
                           <td> These games were picked correctly, but with the wrong spread.</td>
                        </tr>
                        <tr>
                           <td><font color=\"#FF0000\"><b>Red</b></font>: </td>
                           <td>These games were picked incorrectly.</td>
                        </tr>
                        </table></td>
                  </tr>
                  </table>";

     }
     else {
       echo "
                 </table>
                 <table border=0>
                 <tr>
                   <td align=center>Week $week has not yet been locked, therefore, you cannot
                    see $user's picks  </td>
                 </tr>
                 </table>";
     }

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
