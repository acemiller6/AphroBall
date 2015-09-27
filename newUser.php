<?php

echo "
<html>
<head>
<title>AphroBall 7 - New User Signup</title>
<meta name=description content=\"\">
<meta name=keywords content=\"\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">
<META HTTP-EQUIV=\"Pragma\" CONTENT=\"no-cache\">
<META HTTP-EQUIV=\"Expires\" CONTENT=\"Thu, 1 Jan 1970 01:00:00 GMT\">

<style type=\"text/css\">
<!--
.title5 { font-weight: bold; font-size:12pt; color:#aaaaaa; font-family:verdana}
.title7 {font-size:11pt; color:#ff6600; font-family:verdana}
.title9 {font-size:8pt; color:#999999; font-family:verdana}
.title10 {font-size:6pt; color:#333333; font-family:verdana}
.noline { text-decoration:none; }
.archive {font-family:arial; font-size:9pt; color:orange}
.header1 {font-family:arial; font-size:9pt; color:purple}
.header2 {font-family:arial; font-size:9pt;}
.signature {font-family:brush script; font-size:20pt; color:blue;}
//-->
</style>
";
include_once("analyticstracking.php");
echo "
<script language=\"Javascript\" src=\"./userIDValidate.js\"></script>
</head>





<body topmargin=\"0\" leftmargin=\"0\" marginwidth=0 marginheight=0 >
//<form name=\"user\" method=POST action=\"$PHP_SELF\" onsubmit=\"return CheckForm(this);\">
<form name=\"user\" method=POST action=\"$PHP_SELF\" onsubmit=\"return userid_validate();\">
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




<script>
function swapon1()
 {
      document.img1.src=\"../img07/navigr1.gif\";

 }
function swapoff1()
 {
      document.img1.src=\"../img07/navig1.gif\";

 }
</script>

        <tr>
          <td><a href=\"aphrohome.php\"  onclick=\"return true\" onMouseOver=\"swapon1()\" onMouseOut=\"swapoff1()\"><img src=\"../img07/navig1.gif\" width =\"163\" height=\"46\" border=\"0\" name=\"img1\"></a></td>
        </tr>


<script>
function swapon2()
 {
      document.img2.src=\"../img07/navigr2.gif\";

 }
function swapoff2()
 {
      document.img2.src=\"../img07/navig2.gif\";

 }
</script>

        <tr>
          <td><a href=\"rules.php\"  onclick=\"return true\" onMouseOver=\"swapon2()\" onMouseOut=\"swapoff2()\"><img src=\"../img07/navig2.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"img2\"></a></td>
        </tr>


<script>
function swapon3()
 {
      document.img3.src=\"../img07/navigr3.gif\";

 }
function swapoff3()
 {
      document.img3.src=\"../img07/navig3.gif\";

 }
</script>

        <tr>
          <td><a href=\"blog.php\"  onclick=\"return true\" onMouseOver=\"swapon3()\" onMouseOut=\"swapoff3()\"><img src=\"../img07/navig3.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"img3\"></a></td>
        </tr>


<script>
function swapon4()
 {
      document.img4.src=\"../img07/navigr4.gif\";

 }
function swapoff4()
 {
      document.img4.src=\"../img07/navig4.gif\";

 }
</script>

        <tr>
          <td><a href=\"week.php\"  onclick=\"return true\" onMouseOver=\"swapon4()\" onMouseOut=\"swapoff4()\"><img src=\"../img07/navig4.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"img4\"></a></td>
        </tr>


<script>
function swapon5()
 {
      document.img5.src=\"../img07/navigr5.gif\";

 }
function swapoff5()
 {
      document.img5.src=\"../img07/navig5.gif\";

 }
</script>

        <tr>
          <td><a href=\"results.php\"  onclick=\"return true\" onMouseOver=\"swapon5()\" onMouseOut=\"swapoff5()\"><img src=\"../img07/navig5.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"img5\"></a></td>
        </tr>


<script>
function swapon6()
 {
      document.img6.src=\"../img07/navigr6.gif\";

 }
function swapoff6()
 {
      document.img6.src=\"../img07/navig6.gif\";

 }
</script>

        <tr>
          <td><a href=\"performance.php\"  onclick=\"return true\" onMouseOver=\"swapon6()\" onMouseOut=\"swapoff6()\"><img src=\"../img07/navig6.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"img6\"></a></td>
        </tr>


<script>
function swapon7()
 {
      document.img7.src=\"../img07/navigr7.gif\";

 }
function swapoff7()
 {
      document.img7.src=\"../img07/navig7.gif\";

 }
</script>

        <tr>
          <td><a href=\"members.php\"  onclick=\"return true\" onMouseOver=\"swapon7()\" onMouseOut=\"swapoff7()\"><img src=\"../img07/navig7.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"img7\"></a></td>
        </tr>


<script>
function swapon8()
 {
      document.img8.src=\"../img07/navigr8.gif\";

 }
function swapoff8()
 {
      document.img8.src=\"../img07/navig8.gif\";

 }
</script>

        <tr>
          <td><a href=\"na.php\"  onclick=\"return true\" onMouseOver=\"swapon8()\" onMouseOut=\"swapoff8()\"><img src=\"../img07/navig8.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"img8\"></a></td>
        </tr>


<script>
function swapon9()
 {
      document.img9.src=\"../img07/navigr9.gif\";

 }
function swapoff9()
 {
      document.img9.src=\"../img07/navig9.gif\";

 }
</script>

        <tr>
          <td><a href=\"archive.php\"  onclick=\"return true\" onMouseOver=\"swapon9()\" onMouseOut=\"swapoff9()\"><img src=\"../img07/navig9.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"img9\"></a></td>
        </tr>

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

    ";

$sub = $_POST['submit'];

// check to see if we have submitted the form yet
if ($sub) {

   // if it was submitted, retrieve all the input values
   $lgpwd   = $_POST['lgpwd'];
   $first   = $_POST['first'];
   $last    = $_POST['last'];
   $userid  = $_POST['userid'];
   $passwd  = $_POST['passwd'];
   $passwd1 = $_POST['passwd1'];
   $email   = $_POST['email'];
   $show    = $_POST['showemail'];

   //printf("lgpwd=%s\n first=%s\n last=%s\n id=%s\n passwd=%s\n email=%s\n show=%s\n", $lgpwd, $first, $last, $userid, $passwd, $email, $show);
   if ($show) {
      $show = 1;
      //echo "<font color=white>show=$show</font><br>";
   }

   // first, check to make sure that the league password is correct
   // open the database
   //$db = mysql_connect("localhost", "milastot_root", "root");
   //mysql_select_db("milastot_aphroball2007",$db);
   //$db = mysql_connect("localhost", "root", "hoosier");
   //mysql_select_db("aphroball_2015",$db);
   include 'database.php';


   $lgpassQ = mysql_query("SELECT * FROM lgpass", $db);
   $lgpass  = mysql_fetch_array($lgpassQ);

   // checking for spaces in the userid, which will cause problems with SQL
   $p = explode (" ", $userid);
   $spCnt = count($p);

   // are there spaces?
   if($spCnt > 1) {
echo "

             <center><table width=500 border=0>
             <tr>
                <th colspan=2><center><span class=title5>New User Registration</span></center></th>
             </tr>
             <tr>
                <td colspan=2><font color=\"#FF0000\"><center><b>Your userid cannot contain spaces!</b>
                              </center></font></td>
             </tr>
             <tr>
                <td align=right><span class=title9>League Password: </span></td>
                <td><input type=text name=\"lgpwd\"></td>
             </tr>
             <tr>
                <td align=right><span class=title9>First Name: </span></td>
                <td><input type=text name=\"first\" value=\"$first\"></td>
             </tr>
             <tr>
                <td align=right><span class=title9>Last Name: </span></td>
                <td><input type=text name=\"last\" value=\"$last\"></td>
             </tr>
             <tr>
                <td align=right><span class=title9>Userid: </span></td>
                <td><input type=text name=\"userid\">  &nbsp;<span class=title10>(30 character limit)</span></td>
             </tr>
             <tr>
                <td align=right><span class=title9>Password: </span></td>
                <td><input type=password name=\"passwd\"></td>
             </tr>
             <tr>
                <td align=right><span class=title9>Re-type Password: </span></td>
                <td><input type=password name=\"passwd1\"></td>
             </tr>
             <tr>
                <td align=right><span class=title9>e-mail: </span></td>
                <td><input type=text name=\"email\" value=\"$email\"></td>
             </tr>
             <tr>
                <td align=right><input type=\"checkbox\" name=\"showemail\" value=\"1\" </td>
                <td><span class=title10>Check to allow league members<br> to see your email</span></td>
             </tr>
             <tr>
                <td align=right><input type=submit name=\"submit\" value=\"Create Account\"> </td>
                <td><input type=reset></td>
             </tr>
             </table></center>";

   }
   else if ($lgpwd != $lgpass['passwd']) {
echo "

              <center><table width=500 border=0>
              <tr>
                 <th colspan=2><center><span class=title5>New User Registration</span></center></th>
              </tr>
              <tr>
                 <td colspan=2><font color=\"#FF0000\"><center><b>Your League password was incorrect!</b>
                               </center></font></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>League Password: </span></td>
                 <td><input type=text name=\"lgpwd\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>First Name: </span></td>
                 <td><input type=text name=\"first\" value=\"$first\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Last Name: </span></td>
                 <td><input type=text name=\"last\" value=\"$last\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Userid: </span></td>
                 <td><input type=text name=\"userid\" value=\"$userid\">  &nbsp;<span class=title10>(30 character limit)</span></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Password: </span></td>
                 <td><input type=password name=\"passwd\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Re-type Password: </span></td>
                 <td><input type=password name=\"passwd1\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>e-mail: </span></td>
                 <td><input type=text name=\"email\" value=\"$email\"></td>
              </tr>
              <tr>
                 <td align=right><input type=\"checkbox\" name=\"showemail\" value=\"1\" </td>
                 <td><span class=title10>Check to allow league members<br> to see your email</span></td>
              </tr>
              <tr>
                 <td align=right><input type=submit name=\"submit\" value=\"Create Account\"> </td>
                 <td><input type=reset></td>
              </tr>
              </table></center>";
   }

   // check to see if the password's match, if they don't, abort and warn the user
   else if ($passwd != $passwd1) {

echo "
              <center><table width=500 border=0>
              <tr>
                 <th colspan=2><center><span class=title5>New User Registration</span></center></th>
              </tr>
              <tr>
                 <td colspan=2><font color=\"#FF0000\"><center><b>Your password didn't match!</b>
                               </center></font></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>League Password: </span></td>
                 <td><input type=text name=\"lgpwd\" value=\"$lgpwd\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>First Name: </span></td>
                 <td><input type=text name=\"first\" value=\"$first\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Last Name: </span></td>
                 <td><input type=text name=\"last\" value=\"$last\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Userid: </span></td>
                 <td><input type=text name=\"userid\" value=\"$userid\">  &nbsp;<span class=title10>(30 character limit)</span></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Password: </span></td>
                 <td><input type=password name=\"passwd\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Re-type Password: </span></td>
                 <td><input type=password name=\"passwd1\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>e-mail: </span></td>
                 <td><input type=text name=\"email\" value=\"$email\"></td>
              </tr>
              <tr>
                 <td align=right><input type=\"checkbox\" name=\"showemail\" value=\"1\" </td>
                 <td><span class=title10>Check to allow league members<br> to see your email</span></td>
              </tr>
              <tr>
                 <td align=right><input type=submit name=\"submit\" value=\"Create Account\"> </td>
                 <td><input type=reset></td>
              </tr>
              </table></center>";

   }

   // if the passwords match, make sure they aren't NULL
   else if ($passwd == NULL || $passwd1 == NULL) {
echo "
              <center><table width=500 border=0>
              <tr>
                 <th colspan=2><center><span class=title5>New User Registration</span></center></th>
              </tr>
              <tr>
                 <td colspan=2><font color=\"#FF0000\"><center><b>Your cannot have a NULL password!</b>
                               </center></font></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>League Password: </span></td>
                 <td><input type=text name=\"lgpwd\" value=\"$lgpwd\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>First Name: </span></td>
                 <td><input type=text name=\"first\" value=\"$first\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Last Name: </span></td>
                 <td><input type=text name=\"last\" value=\"$last\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Userid: </span></td>
                 <td><input type=text name=\"userid\" value=\"$userid\">  &nbsp;<span class=title10>(30 character limit)</span></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Password: </span></td>
                 <td><input type=password name=\"passwd\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Re-type Password: </span></td>
                 <td><input type=password name=\"passwd1\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>e-mail: </span></td>
                 <td><input type=text name=\"email\" value=\"$email\"></td>
              </tr>
              <tr>
                 <td align=right><input type=\"checkbox\" name=\"showemail\" value=\"1\" </td>
                 <td><span class=title10>Check to allow league members<br> to see your email</span></td>
              </tr>
              <tr>
                 <td align=right><input type=submit name=\"submit\" value=\"Create Account\"> </td>
                 <td><input type=reset></td>
              </tr>
              </table></center>";
   }

   // if the passwords match, check to make sure that the username doesn't already exist
   else {

      // open the database
      //$db = mysql_connect("localhost", "milastot_root", "root");
      //mysql_select_db("milastot_aphroball2007",$db);
      //$db = mysql_connect("localhost", "root");
      //mysql_select_db("milastot_aphroball2007",$db);

      $query = "SELECT * FROM admin WHERE userid=\"$userid\"";
      $queryrc = mysql_query($query,$db);

      $notValid = mysql_num_rows($queryrc);


      // check to see if the query for the userid existed in the database.  If it does, alert
      // the user.  They must re-enter a userid
      if ($notValid) {
echo "
              <center><table width=500 border=0>
              <tr>
                 <th colspan=2><center><span class=title5>New User Registration</span></center></th>
              </tr>
              <tr>
                 <td colspan=2><font color=\"#FF0000\"><center><b>Userid $userid already exists!</b>
                               </center></font></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>League Password: </span></td>
                 <td><input type=text name=\"lgpwd\" value=\"$lgpwd\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>First Name: </span></td>
                 <td><input type=text name=\"first\" value=\"$first\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Last Name: </span></td>
                 <td><input type=text name=\"last\" value=\"$last\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Userid: </span></td>
                 <td><input type=text name=\"userid\" value=\"\">  &nbsp;<span class=title10>(30 character limit)</span></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Password: </span></td>
                 <td><input type=password name=\"passwd\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Re-type Password: </span></td>
                 <td><input type=password name=\"passwd1\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>e-mail: </span></td>
                 <td><input type=text name=\"email\" value=\"$email\"></td>
              </tr>
              <tr>
                 <td align=right><input type=\"checkbox\" name=\"showemail\" value=\"1\" </td>
                 <td><span class=title10>Check to allow league members<br> to see your email</span></td>
              </tr>
              <tr>
                 <td align=right><input type=submit name=\"submit\" value=\"Create Account\"> </td>
                 <td><input type=reset></td>
              </tr>
              </table></center>";
      }
      else {

         //if they don't want their email address shown, need to change $show variable from NULL
         if ($show != 1) {
             $show = 0;
         }
echo "
            <center><font color=\"#333333\">Congrats, your userid (<b>$userid</b>) was not in the database and your passwords matched!<br><br>
             If you aren't redirected in 5 seconds, click here to go to <a href=\"aphrohome.php\">AphroHome</a><br>
            </font></center>";

         $rnkArray = $userid . "_rk";


         $insert   = "INSERT INTO admin VALUES ('$first', '$last', '$userid', password('$passwd'),
                                         '$email', $show)";
         $insertrc = mysql_query($insert,$db);

         $newTab   = "CREATE TABLE $userid(week int(2), game int(2), winner char(3), spread int(3),
                     made int(1), missed int(1), missSpread int(1), picked int(1))";
         $newTabrc = mysql_query($newTab,$db);

         $newTbl   = "CREATE TABLE $rnkArray(week int(2), rank int(2), rankW int(2), points int(3),
                     pointsW int(3), percentage float, percentageW float)";
         $newTblrc = mysql_query($newTbl,$db);

         $_COOKIE['User'] = $userid;

      }
   }
}

// enter this else if we have not yet submitted the page
else {

echo "

              <center><table width=500 border=0>
              <tr>
                 <th colspan=2><center><span class=title5>New User Registration</span></center></th>
              </tr>
              <tr>
                 <td align=right><span class=title9>League Password: </span></td>
                 <td><input type=text name=\"lgpwd\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>First Name: </span></td>
                 <td><input type=text name=\"first\" value=\"$first\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Last Name: </span></td>
                 <td><input type=text name=\"last\" value=\"$last\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Userid: </span></td>
                 <td><input type=text name=\"userid\" value=\"$userid\"> &nbsp;<span class=title10>(30 character limit)</span></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Password: </span></td>
                 <td><input type=password name=\"passwd\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>Re-type Password: </span></td>
                 <td><input type=password name=\"passwd1\"></td>
              </tr>
              <tr>
                 <td align=right><span class=title9>e-mail: </span></td>
                 <td><input type=text name=\"email\" value=\"$email\"></td>
              </tr>
              <tr>
                 <td align=right><input type=\"checkbox\" name=\"showemail\" value=\"1\" </td>
                 <td><span class=title10>Check to allow league members<br> to see your email</span></td>
              </tr>
              <tr>
                 <td align=right><input type=submit name=\"submit\" value=\"Create Account\"> </td>
                 <td><input type=reset></td>
              </tr>
              </table></center>";
   }
   // end of print for first time in page
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
