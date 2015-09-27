<?php

echo "
<html>
<head>
<title>AphroBall 7 - Top Scores</title>
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
.title5 {font-weight: bold; font-size:11pt; color:#ff6600; font-family:verdana}
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
        </tr>\n";
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

   // include the array of teams and logos
   include("teamArray.inc");
   if ($week == NULL) {
      include("resultSelector.inc");
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
   //include 'resultSelector.inc';

   //grab results out of the _rk array for the menu scoreboard
   $whichDB  = $_COOKIE['User'];
   $whichDB .= "_rk";
   $w    = $week;

   do {
       $rQ   = mysql_query("SELECT * FROM $whichDB WHERE week=\"$w\"", $db);
       $r    = mysql_fetch_array($rQ);

       $rank    = $r["rank"];
       $rankW   = $r["rankW"];
       $points  = $r["points"];
       $pointsW = $r["pointsW"];
       $perc    = $r["percentage"];
       $percW   = $r["percentageW"];
       $w--;
   } while($rank == NULL);

echo "
              <center>
              <span class=title5>Top Weekly Performances</span>
              <table border=0 width=430 cellspacing=0 cellpadding=3>
              <tr bgcolor=\"#ffc042\">
                 <th width=200 align=left>Player </th>
                 <th>Week </th>
                 <th>Points</th>
              </tr>";

                   $lstQ   = mysql_query("SELECT * FROM admin", $db);
                   $lst    = mysql_fetch_array($lstQ);
                   $rd     = mysql_num_rows($lstQ);

                   //create an array to store the point totals
                   $rank   = array();


                   for($l=1;$l<$rd;$l++){
                   //cycle through all the players weekly scores and place them into an array
                   // that can be sorted.

                      //skip the guest id
                      if($lst['userid'] == "guest") {
                          $lst = mysql_fetch_array($lstQ);
                      }

                      $whichRank = $lst['userid'] . "_rk";

                      $scoreQ = mysql_query("SELECT * FROM $whichRank", $db);
                      $score  = mysql_fetch_array($scoreQ);
                      $scoreN = mysql_num_rows($scoreQ);


                      for($s=1;$s<=$scoreN;$s++) {
                          $pts = $score['pointsW'];
                          //have we seen this number of points scored before?
                          if($ct[$pts] == NULL) {  $ct[$pts] = 0;  }

                          //put the weeks pts at the top of the rank stack.
                          // then assign a week and user to that point value.
                          array_unshift($rank, $pts);

                          //if more than one person has the same score, make sure we note this
                          if($player[$pts] != NULL) {
                             $extraw[$pts][$ct[$pts]] = $wek[$pts];  //store the previous value here
                             $extrap[$pts][$ct[$pts]] = $player[$pts];   //store the previous value here
                             $flag[$pts] = 1;
                             $ct[$pts]++;
                          }
                          $wek[$pts]    = $score['week'];
                          $player[$pts] = $lst['userid'];

                          $score = mysql_fetch_array($scoreQ);
                      }
                    //fetch the next player
                    $lst = mysql_fetch_array($lstQ);

                   }

                   // reverse sort the scores so that the highest is first
                   rsort($rank);
                   $rcnt = 0;

                   //print a table of the top ten scores
                   for($topten=0;$topten<10;$topten++) {

                      $pwindex = $rank[$topten];
                      if($rowC == "#efefe7") { $rowC = "#ffffff"; }
                      else { $rowC = "#efefe7";  }

                      //need to change what happens depending on whether there is one
                      // or more hits for the same point value
                      //enter this loop only if more than one person has this score
                      if($flag[$pwindex] == 1) {
                         //stop short of the actual number of players with this score
                         //the last player is not stored in a $extra variable, so we have
                         // one final print statement for him at --FINAL PRINT--
                         for($z=0;$z<$ct[$pwindex];$z++) {

                              printf("
                             <tr bgcolor=\"%s\">
                                <td>%s </td>
                                <td align=center>%s </td>
                                <td align=center>%s </td>
                             </tr>
                              ", $rowC, $extrap[$rank[$topten]][$z], $extraw[$rank[$topten]][$z], $rank[$topten]);

                              if($rowC == "#efefe7") { $rowC = "#ffffff"; }
                              else { $rowC = "#efefe7";  }
                              if($z != $ct[$pwindex]) {
                                  $topten++;  //increment because we are eating one everytime through
                              }
                         }
                         // -- FINAL PRINT --
                         printf("
                         <tr bgcolor=\"%s\">
                            <td>%s </td>
                            <td align=center>%s </td>
                            <td align=center>%s </td>
                         </tr>
                          ", $rowC, $player[$rank[$topten]], $wek[$rank[$topten]], $rank[$topten]);

                         if($rowC == "#efefe7") { $rowC = "#ffffff"; }
                         else { $rowC = "#efefe7";  }
                         if($z != $ct[$pwindex]) {
                              $topten++;  //increment because we are eating one everytime through
                         }
                         $flag[$pts] = 0;
                      }
                      //if this is a unique score, print it with this portion of loop
                      else {
                          printf("
                         <tr bgcolor=\"%s\">
                            <td>%s </td>
                            <td align=center>%s </td>
                            <td align=center>%s </td>
                         </tr>
                          ", $rowC, $player[$pwindex], $wek[$pwindex], $rank[$topten]);
                      }

                      $rcnt++;
                   }

                   echo "
              </table></center>";
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
