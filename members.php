<?php

echo "
<html>
<head>
<title>AphroBall 7 - AphroBall Members</title>
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
<!-- <form name=\"user\" method=POST action=\"$PHP_SELF\" onsubmit=\"return CheckForm(this);\"> -->
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

echo "
                     <table border=0 width=630>
                     <tr bgcolor=\"#ff6666\">
                         <th width=200>Player Name </th>
                         <th>Username</th>
                         <th>Email</th>
                     </tr>";

   $users = mysql_query("SELECT * FROM admin",$db);
   $num_users = mysql_num_rows($users);

   //echo "$num_users<br>";
   for ($p=1;$p<=$num_users+1;$p++) {

      //select a background color for table
      if ($p % 2) {  $color = "#ffffff";    }
      else {   $color = "#efefe7";   }

      //fetch a new entry from the admin table each time
      $cur_user = mysql_fetch_array($users);

      //make the row yellow for the user who is looking at this page
      $user   = $cur_user["userid"];
      if ($user == "guest") {
        $dontPrint = 1;
        $p++;
      }
      //echo "$user-<br>";
      //in case it was the guest, we need to re-enter this value
      $user   = $cur_user["userid"];
      if ($user == $_COOKIE['User']) {
        $color = "#ffffcc";
      }
      //echo "-$user-<br>";

      //if the user doesn't want his email address shown, then use "unavailable"
      $visible = $cur_user["showemail"];
      //in case it was the guest, we need to re-enter this value
      if (!$visible) {
         $cur_user["email"] = "unavailable";
      }

      if (!$dontPrint) {
         printf("                     <tr bgcolor=\"%s\">
                        <td>%s %s</td>
                        <td>&nbsp;%s</td>
                        <td>&nbsp;%s</td>
                     </tr>",       $color, $cur_user["firstname"], $cur_user["lastname"],
                     $cur_user["userid"], $cur_user["email"]);

      }

      $dontPrint = 0;
   }
echo "
                     </table>
                     <p>
                     <form method=POST name=\"sendMail\" action=\"sendMail.php\">

                     <input type=submit value=\"Send Mail to League\">
                     </form>";
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

<!-- </form>  -->
</body>


</html>
