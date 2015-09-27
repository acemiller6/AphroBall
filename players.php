<?php

echo "
<html>
<head>
<title>AphroBall 7 - Founding Fathers</title>
<meta name=description content=\"\">
<meta name=keywords content=\"\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">
<META HTTP-EQUIV=\"Pragma\" CONTENT=\"no-cache\">
<META HTTP-EQUIV=\"Expires\" CONTENT=\"Thu, 1 Jan 1970 01:00:00 GMT\">

<style type=\"text/css\">
<!--
.gameTab { font-weight: bold; font-size:10pt; color:#cccccc; font-family:verdana}
.gameTab1 { font-weight: bold; font-size:10pt; color:#ff6600; font-family:verdana}
.bodyT { color:#999999}
.bodyB { color:#000000}
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
          <td><a href=\"players.php\"  onclick=\"return true\" onMouseOver=\"swapon8()\" onMouseOut=\"swapoff8()\"><img src=\"../img07/navig8.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"img8\"></a></td>
        </tr>
        <tr>
          <td><a href=\"archive.html\"  onclick=\"return true\" onMouseOver=\"swapon9()\" onMouseOut=\"swapoff9()\"><img src=\"../img07/navig9.gif\" width=\"163\" height=\"46\" border=\"0\" name=\"img9\"></a></td>
        </tr>";

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

                <P><IMG SRC=\"../img07/vin.jpg\" ALIGN=RIGHT ALIGN=CENTER>
                <H2>Vincent Dino Bartolome</H2>
                <TABLE BORDER=0 WIDTH=575>
                <TR>
                   <TH ALIGN=LEFT>Birthplace:</TH>
                   <TD WIDTH=*><span class=bodyT>Alima Bacoor Cavite, Phillipines</span></TD>
                   <TH ALIGN=RIGHT>Hometown:</TH>
                   <TD><span class=bodyT>Arlington Heights, IL</span></TD>
                </TR>
                <TR>
                   <TD><BR></TD>
                   <TD COLSPAN=3><span class=bodyT>(a.k.a. Imperial City)</span></TD>
                </TR>
                <TR>
                   <TH ALIGN=LEFT>D.O.B.:</TH>
                   <TD WIDTH=75><span class=bodyT>3/12/77</span></TD>
                   <TH ALIGN=RIGHT>Bats/Throws:</TH>
                   <TD WIDTH=75><span class=bodyT>Right/Right</span></TD>
                </TR>
                <TR>
                   <TH ALIGN=LEFT>Height:</TH>
                   <TD WIDTH=75><span class=bodyT>5'8\"</span></TD>
                   <TH ALIGN=RIGHT>Weight:</TH>
                   <TD WIDTH=75><span class=bodyT>156</span></TD>
                </TR>
                <TR>
                   <TH ALIGN=LEFT>Years in fantasy:</TH>
                   <TD COLSPAN=3><span class=bodyT>10</span></TD>
                </TR>
                <TR>
                   <TH ALIGN=LEFT ALIGN=TOP>Career Highlights:</TH>
                   <TD COLSPAN=3><span class=bodyT>* 2002 Football Title led by Matt Hasselbecks week 17 performance. Including a 1yard TD run in the 4th.</span></td>
                </TR>
                <TR>
                   <TD><BR></TD>
                   <TD COLSPAN=3><span class=bodyT>* 2004 Football Title led by Daunte Culpeppers ridiculousness.</span></TD>
                </TR>
                <TR>
                   <TD><BR></TD>
                   <TD COLSPAN=3><span class=bodyT>* 2005 Basketball Title aka \"the most dominant team ever\"</span></TD>
                </TR>
                <TR></TR>
                <TR>
                   <TH ALIGN=LEFT WIDTH=150>Most hated players:</TH>
                   <TD COLSPAN=3><span class=bodyT>1. Stephen Davis</span></TD>
                </TR>
                <TR>
                   <TD><BR></TD>
                   <TD COLSPAN=3><span class=bodyT>2. Jake Delhomme</span><TD>
                </TR>
                <TR>
                   <TD><BR></TD>
                   <TD COLSPAN=3><span class=bodyT>3. Larry Walker</span><TD>
                </TR>
                <TR>
                   <TD><BR></TD>
                   <TD COLSPAN=3><span class=bodyT>4. Anyone who played in the XFL</span><TD>
                </TR>
                <TR></TR>
                <TR>
                   <TH ALIGN=LEFT>Hobbies:</TH>
                   <TD COLSPAN=3><span class=bodyT>martial arts, golf, playing guitar/drums, worship..</span></TD>
                </TR>
                </TABLE>
                <BR><STRONG>&nbsp;Personal Comments:</STRONG>
                <span class=bodyT>
                </span>
                <BR><BR><BR><BR><BR><BR><BR><BR>


                <P><IMG SRC=\"../img07/vwal.gif\" ALIGN=RIGHT ALIGN=CENTER>
                <H2>Steven Craig VanderWal</H2>
                <TABLE BORDER=0 WIDTH=575>
                <TR>
                   <TH ALIGN=LEFT>Birthplace:</TH>
                   <TD><span class=bodyT>Falls Church, VA</span></TD>
                   <TH ALIGN=RIGHT>Hometown:</TH>
                   <TD><span class=bodyT>Mt. Prospect, IL</span></TD>
                </TR>
                <TR>
                   <TH ALIGN=LEFT>D.O.B.:</TH>
                   <TD WIDTH=75><span class=bodyT>10/24/76</span></TD>
                   <TH ALIGN=RIGHT>Bats/Throws:</TH>
                   <TD WIDTH=75><span class=bodyT>Right/Right</span></TD>
                </TR>
                <TR>
                   <TH ALIGN=LEFT>Height:</TH>
                   <TD WIDTH=75><span class=bodyT>6'1\"</span></TD>
                   <TH ALIGN=RIGHT>Weight:</TH>
                   <TD WIDTH=75><span class=bodyT>180</span></TD>
                </TR>
                <TR>
                   <TH ALIGN=LEFT>Years in fantasy:</TH>
                   <TD COLSPAN=3><span class=bodyT>13</span></TD>
                </TR>
                <TR>
                   <TH ALIGN=LEFT ALIGN=TOP>Career Highlights:</TH>
                   <TD COLSPAN=3><span class=bodyT>* Baseball title run in '05</span></TD>
                </TR>
                <TR>
                   <TD><BR></TD>
                   <TD COLSPAN=3><span class=bodyT>* Carried to '05 football title by Larry Johnson and bunch of stiffs after Priest's injury</span></TD>
                </TR>
                <TR>
                   <TH ALIGN=LEFT WIDTH=150>Most hated players:</TH>
                   <TD COLSPAN=3><span class=bodyT>1. Rich Harden</span></TD>
                </TR>
                <TR>
                   <TD><BR></TD>
                   <TD COLSPAN=3><span class=bodyT>2. most weeks, Rex Grossman</span></TD>
                </TR>
                <TR>
                   <TH ALIGN=LEFT WIDTH=150>I Have a Man-crush on...:</TH>
                   <TD COLSPAN=3><span class=bodyT>1. Jose Reyes</span></TD>
                </TR>
                </TABLE>
                <STRONG>Personal comments:</STRONG>
                 <BR><BR><BR><BR><BR><BR><BR><BR><BR>


                <P><IMG SRC=\"../img07/ace.jpg\" ALIGN=RIGHT ALIGN=CENTER>
      <!--          <P><IMG SRC=\"../img07/Tiger.jpg\" ALIGN=RIGHT ALIGN=CENTER>   -->
                <H2>Ryan O'Neal Miller</H2>
                <TABLE BORDER=0 WIDTH=575>
                <TR>
                   <TH ALIGN=LEFT>Birthplace:</TH>
                   <TD><span class=bodyT>South Bend, IN</span></TD>
                   <TH ALIGN=RIGHT>Hometown:</TH>
                   <TD><span class=bodyT>Rochester, MN</span></TD>
                </TR>
                <TR>
                   <TH ALIGN=LEFT>D.O.B.:</TH>
                   <TD WIDTH=75><span class=bodyT>4/24/77</span></TD>
                   <TH ALIGN=RIGHT>Bats/Throws:</TH>
                   <TD WIDTH=75><span class=bodyT>Right/Right</span></TD>
                </TR>
                <TR>
                   <TH ALIGN=LEFT>Height:</TH>
                   <TD WIDTH=75><span class=bodyT>6'0\"</span></TD>
                   <TH ALIGN=RIGHT>Weight:</TH>
                   <TD WIDTH=75><span class=bodyT>170</span></TD>
                </TR>
                <TR>
                   <TH ALIGN=LEFT>Years in fantasy:</TH>
                   <TD COLSPAN=3><span class=bodyT>15</span></TD>
                </TR>
                <TR>
                   <TH ALIGN=LEFT ALIGN=TOP>Career Highlights:</TH>
                   <TD COLSPAN=3><span class=bodyT>* Forming a dynasty in Fantasy Basketball (Echo Base Pimps)</span></TD>
                </TR>
                <TR>
                   <TD><BR></TD>
                   <TD COLSPAN=3><span class=bodyT>* Having the worst draft in history last year (Portis-1st, Cadillac-2nd) </span></TD>
                </TR>
                <TR>
                   <TD><BR></TD>
                   <TD COLSPAN=3><span class=bodyT>* Assembling a pitching staff that has 112 relief appearances and only 38 saves. </span></TD>
                </TR>
                <TR>
                   <TD><BR></TD>
                   <TD COLSPAN=3><span class=bodyT>* I am Tiger Woods. </span></TD>
                </TR>
                <TR></TR>
                <TR>
                   <TH ALIGN=LEFT WIDTH=150>Most hated players:</TH>
                   <TD COLSPAN=3><span class=bodyT>1. Barry Bonds</span></TD>
                </TR>
                <TR>
                   <TD><BR></TD>
                   <TD COLSPAN=3><span class=bodyT>2. Clay Hensley --- for serving up meat to Bonds</span><TD>
                </TR>
                <TR></TR>
                <TR>
                   <TH ALIGN=LEFT WIDTH=150>I Have a Man-crush on...:</TH>
                   <TD COLSPAN=3><span class=bodyT>1. ARod</span></TD>
                </TR>
                <TR>
                   <TH ALIGN=LEFT>Hobbies:</TH>
                   <TD COLSPAN=3><span class=bodyT>Getting old, having surgeries</span></TD>
                <TR>
                </TR><TR>
                </TABLE>
                <STRONG>&nbsp;Personal comments:</STRONG>
                <span class=bodyT>&nbsp;
                </span>
                 <BR><BR><BR><BR><BR><BR><BR><BR><BR>

                <HR>
                <DIV ALIGN=CENTER><ADDRESS>Last updated: Aug 22, 2007<BR>
                By: <A HREF=\"mailto:ryanom@milastotle.com\">the bomb</A>
                </ADDRESS>
                </DIV>

               ";


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
