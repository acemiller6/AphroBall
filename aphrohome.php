<?php
// if a page is not printing properly, there may be notices, so comment this out
//error_reporting(E_ALL ^ E_NOTICE);

$sub = $_POST['submit'];

// open the database
//$db = mysql_connect("localhost", "milnuts_root", "hoosier");
//mysql_select_db("milnuts_aphroball2015",$db);
//$db = mysql_connect("localhost", "root", "hoosier");
//mysql_select_db("aphroball_2015",$db);
include 'database.php';

if ($sub) {

	include 'database.php';

   //check to see if the userid exists.
   $uid = $_POST['userid'];
   $pw  = $_POST['passwd'];
   //echo "$uid - $pw";
   $dq  = "SELECT * FROM admin WHERE userid=\"$uid\" AND passwd=password('$pw')";
   $d   = mysql_query($dq, $db);

   if (mysql_num_rows($d)) {
     // userid exists, set it as the cookie
     $uid = $uid;
	   //echo "User exists";
   } else {
     $uid = NULL;
 	 	 //echo "User DOES NOT exist";
  }

   $ck = setcookie('User', $uid, time()+3600);
}

echo "
<html>
<head>
<title>AphroBall 7 - The Home of AphroBall</title>
<meta name=description content=\"\">
<meta name=keywords content=\"\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">
<META HTTP-EQUIV=\"Pragma\" CONTENT=\"no-cache\">
<META HTTP-EQUIV=\"Expires\" CONTENT=\"Thu, 1 Jan 1970 01:00:00 GMT\">

<style type=\"text/css\">
<!--
.gameTab { font-weight: bold; font-size:10pt; color:#333333; font-family:verdana}
.gameTab1 { font-weight: bold; font-size:10pt; color:#ff6600; font-family:verdana}
.bodyT { color:#333333; font-family:verdana}
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
</style>";

// only run this if the user hasn't entered a userid and password
if (!$sub) {
   if ($_COOKIE == NULL) {
      echo "
<script language=JavaScript>
   function loadMe () {
     document.id.userid.focus();
     document.id.userid.select();
   }
</script> ";
   }
   else {
      echo "
<script language=JavaScript>
   function loadMe () {
   }
</script> ";
   }
}
else {
echo "
<script language=JavaScript>
   function loadMe () {
   }
</script> ";
}

// set the $logged variable so we can begin processing the page
if ($_COOKIE['User'] == NULL) {
   $logged = 0;
}
else {
   $logged = 1;
}

//printf("-%s\n", $logged);
echo "
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
function swapon10()
 {
      document.img10.src=\"../img07/adminr.gif\";
 }
function swapoff10()
 {
      document.img10.src=\"../img07/admin.gif\";
 }
</script>
";
include_once("analyticstracking.php");
echo "</head>";


//check to see if a cookie is set.
if (!$logged) {

   $sub = $_POST['submit'];
   if ($sub) {

      $userid = $_POST['userid'];
      $passwd = $_POST['passwd'];

      // open the database
      //$db = mysql_connect("localhost", "root");
      //mysql_select_db("milastot_aphroball",$db);

      $query   = "SELECT * FROM admin WHERE userid=\"$userid\" AND passwd=password('$passwd')";
      $queryrc = mysql_query($query, $db);

      $row = mysql_fetch_array($queryrc);
      // $found = mysql_num_rows($row);
			// echo "found:$found<br> row:$row<br>";

      // if the userid and password are in the database, take them to the openning page.
      if ($row) {
          // check to see if the cookie is set
             $_COOKIE['User'] = $row['userid'];

          //printf("userid: %s<br>
          //     passwd: %s<br>
          //     email: %s<br>
          //     <br>These were retreived from the database:<br><br>
          //     Go <a href=\"aphrohome.php\">Home</a>",
          //     $row['userid'], $row['passwd'], $row['email']);

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
        </tr>";

        if ($_COOKIE['User'] == "milnuts") {
        echo "        <tr>
          <td><a href=\"administration.php\"  onclick=\"return true\" onMouseOver=\"swapon10()\" onMouseOut=\"swapoff10()\"><img src=\"../img07/admin.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"admin\"></a></td>
        </tr>";

        }
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
              <td width=\"100%\">
                <span class=bodyT>
                <p><strong>Congratulations</strong>, you are one of the chosen ones.
                <br>
								<p>Just a reminder, your picks will have to be in by 7:00 PM CST on Thursday.
                There are a few weeks that I highlighted below where the first game
                is not a Thursday or is not a Thursday night game, so I'm putting up the
								following list so you can make sure your picks are in on time.</span>

                <p><br>
                <p><center>
                <table width=300 border=0 cellspacing=0>
                <tr>
                  <th class=gameTab>Week</th>
                  <th class=gameTab>Picks in by...</th>
                </tr>
                <tr>
                  <td align=center class=gameTab>1 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Sept. 10</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>2 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Sept. 17</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>3 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Sept. 24</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>4 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Oct. 1</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>5 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Oct. 8</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>6 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Oct. 15</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>7 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Oct. 22</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>8 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Oct. 29</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>9 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Nov. 5</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>10 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday  Nov. 12</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>11 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday  Nov. 19</td>
                </tr>
                <tr>
                  <td align=center class=gameTab1 bgcolor=#eeeeee>12 </td>
                  <td align=right class=gameTab1 bgcolor=#eeeeee>11:00 AM CST, Thursday Nov. 26 </td>
                </tr>
                <tr>
                  <td align=center class=gameTab>13 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Dec. 3</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>14 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Dec. 10</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>15 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Dec. 17 </td>
                </tr>
                <tr>
                  <td align=center class=gameTab>16 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Dec. 24 </td>
                </tr>
                <tr>
                  <td align=center class=gameTab1 bgcolor=#eeeeee>17 </td>
                  <td align=right class=gameTab1 bgcolor=#eeeeee>12:00 PM CST, Sunday Jan. 3</td>
                </tr>
                </table></center>
                </font><br><br><br>
               ";
       }
			 // either userid or pwd was not in the database.  Figure out which one, or both
			 else {

				 $uquery   = "SELECT * FROM admin WHERE userid=\"$userid\"";
	       $uqueryrc = mysql_query($uquery, $db);
				 $urow     = mysql_fetch_array($uqueryrc);
				 $foundUID = mysql_num_rows($urow);
				 //does the username exist?
				 if($foundUID) {
					 $uadmin = 1;
					 $phrase = "";
				 }
				 else {
					 $uadmin = 0;
					 $phrase = "<strong>userID</strong>";
				 }

				 $pquery   = "SELECT * FROM admin WHERE passwd=password('$passwd')";
	       $pqueryrc = mysql_query($pquery, $db);
				 $prow     = mysql_fetch_array($pqueryrc);
				 $foundPWD = mysql_num_rows($prow);
				 //does the password exist?
				 if($foundPWD) {
					 $padmin = 1;
					 $phrase .= " was";			// need to append the last 'was' for userid here
				 }
				 else {
					 $padmin = 0;
					 if(!$foundUID) {
						 $phrase .= " and <strong>password</strong> were";
					 }
					 else {
						 $phrase .= "<strong>password</strong> was";
					 }
				 }

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
	 			        </tr>";

	 			        if ($_COOKIE['User'] == "milnuts") {
	 			        echo "        <tr>
	 			          <td><a href=\"administration.php\"  onclick=\"return true\" onMouseOver=\"swapon10()\" onMouseOut=\"swapoff10()\"><img src=\"../img07/admin.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"admin\"></a></td>
	 			        </tr>";

	 			        }

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
	 			              <td width=\"100%\">
	 			                  <span class=bodyT>";
	 			printf("
	 			                    <p>Your %s not found in the database.  Please try logging in again.", $phrase);
			 }
   }

   // enter this loop if they are not logged in and haven't submitted their
   // userid and password.
   else {
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
        </tr>";

        if ($_COOKIE['User'] == "milnuts") {
        echo "        <tr>
          <td><a href=\"administration.php\"  onclick=\"return true\" onMouseOver=\"swapon10()\" onMouseOut=\"swapoff10()\"><img src=\"../img07/admin.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"admin\"></a></td>
        </tr>";

        }
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
              <td width=\"100%\">
                  <span class=bodyT>
                    <p>Welcome back everyone.  <p>
                    AphroBall, season 7, has yet another brand new face.  For those of you who
                    have played since season 1, this is already the fourth incarnation of AphroBall.
                    The rules have not changed
                    and I kept all the same content as last year.  Once again, if there is
                    some feature you would like added please let me know and I'll do my best
                    to accommodate all requests.
                    </font><br><br><br>
                    <p><table border=0 width=150>
                       <tr>
                         <td><span class=\"signin\">Username:</span></td>
                         <td><input type=text name=\"userid\" size=10> </td>
                       </tr>
                       <tr>
                         <td><span class=\"signin\">Password:</span> </td>
                         <td><input type=password name=\"passwd\" size=10> </td>
                       </tr>
                       <tr>
                         <td colspan=2><input type=submit name=\"submit\" value=\"Submit\"> &nbsp;<input type=reset> </td>
                       </tr>
                       <tr>
                         <td colspan=2> <a href=\"newUser.php\" class=noline1>New User</a><br> </td>
                       </tr>
                       </table>

              ";
   }
}
else {

// if we are in this loop it means they are logged in

   $val = $_COOKIE['User'];
   if (!isset($val)) {
      $_COOKIE['User'] = "Guest";
   }
   $newVal = $_COOKIE['User'];

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
        </tr>";

        if ($_COOKIE['User'] == "milnuts") {
        echo "        <tr>
          <td><a href=\"administration.php\"  onclick=\"return true\" onMouseOver=\"swapon10()\" onMouseOut=\"swapoff10()\"><img src=\"../img07/admin.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"admin\"></a></td>
        </tr>";

        }
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
              <td width=\"100%\">
                <span class=bodyT>
                <p><strong>Congratulations</strong>, you are one of the chosen ones.
                <br>
                <p>Just a reminder, your picks will have to be in by 7:00 PM CST on Thursday.
                There are a few weeks that I highlighted below where the first game
                is not a Thursday or is not a Thursday night game, so I'm putting up the
								following list so you can make sure your picks are in on time.</span>

                <p><br>
                <p><center>
                <table width=300 border=0 cellspacing=0>
                <tr>
                  <th class=gameTab>Week</th>
                  <th class=gameTab>Picks in by...</th>
                </tr>
                <tr>
                  <td align=center class=gameTab>1 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Sept. 10</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>2 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Sept. 17</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>3 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Sept. 24</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>4 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Oct. 1</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>5 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Oct. 8</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>6 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Oct. 15</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>7 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Oct. 22</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>8 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Oct. 29</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>9 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Nov. 5</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>10 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday  Nov. 12</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>11 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday  Nov. 19</td>
                </tr>
                <tr>
                  <td align=center class=gameTab1 bgcolor=#eeeeee>12 </td>
                  <td align=right class=gameTab1 bgcolor=#eeeeee>11:00 AM CST, Thursday Nov. 26 </td>
                </tr>
                <tr>
                  <td align=center class=gameTab>13 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Dec. 3</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>14 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Dec. 10</td>
                </tr>
                <tr>
                  <td align=center class=gameTab>15 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Dec. 17 </td>
                </tr>
                <tr>
                  <td align=center class=gameTab>16 </td>
                  <td align=right class=gameTab>7:00 PM CST, Thursday Dec. 24 </td>
                </tr>
                <tr>
                  <td align=center class=gameTab1 bgcolor=#eeeeee>17 </td>
                  <td align=right class=gameTab1 bgcolor=#eeeeee>12:00 PM CST, Saturday Jan. 3</td>
                </tr>
                </table></center>
                </font><br><br><br>

              ";
}
?>
              <br>
              <center>
              <img src="../img07/usaCa.gif"></center><br>
              <hr>
              <center>Powered by: <strong>milnuts</strong></center>
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
