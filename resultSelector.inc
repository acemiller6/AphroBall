

<?php

// This file changes the week for things like the scoreboard and the results page.  The
//     key thing is that each week needs to extend out to the beginning of the next week.
//     See the comment for week 1 in September below, but the last day for week 1 needs
//     to be the first day of week 2.


date_default_timezone_set('America/Chicago');
// This file is prepared for the 2006 NFL season

$curmonth  = date("F");   //current month  i.e. July
$curmonthN = date("n");   //current month  i.e.    7
$curday    = date("j");   //current day    i.e.   15
$curyear   = date("Y");   //current year   i.e. 2015
$curhour   = date("G");   //current hour   i.e.   15
$curmin    = date("i");   //current min    i.e.   44
$curdayL   = date("l");   //current day    i.e. Monday
$locked[0] = 0;

//echo "Date(): $curmonth $curday $curyear $curhour:$curmin  $curdayL<br>";
//I didn't change this until week 16, but the weeks should be selected from
//  Sunday to Saturday.
//printf("%s %s %s %s, %s:%s  %s", $curmonth,$curmonthN,$curday,$curyear,$curhour,$curmin,$curdayL);

// THIS IS ANY MONTH NOT IN THE REGULAR SEASON ###
if (($curmonthN > 1) && ($curmonthN < 8)) {
   $week = 17;
   $locked[1] = 1;
   $locked[2] = 1;
   $locked[3] = 1;
   $locked[4] = 1;
   $locked[5] = 1;
   $locked[6] = 1;
   $locked[7] = 1;
   $locked[8] = 1;
   $locked[9] = 1;
   $locked[10] = 1;
   $locked[11] = 1;
   $locked[12] = 1;
   $locked[13] = 1;
   $locked[14] = 1;
   $locked[15] = 1;
   $locked[16] = 1;
   $locked[17] = 1;
}

// THIS IS ONE MONTH BEFORE THE REGULAR SEASON ###
if (($curmonthN >= 7 ) && ($curmonthN < 9)) {
   $week = 1;
}

// THIS IS SEPTEMBER #############################
if ($curmonthN == 9) {
   if (($curday > 1) && ($curday <= 17)) {    //17th is the first day of week 2 games
       $week = 1;
   }
   else if (($curday > 17) && ($curday <= 24)) {
       $week = 2;
   }
   else if (($curday > 24) && ($curday <= 30)) {
       $week = 3;
   }
}

// THIS IS OCTOBER ################################
if ($curmonthN == 10) {
   if ($curday == 1) {
       $week = 3;
   }
   if (($curday > 2) && ($curday <= 8)) {
       $week = 4;
   }
   else if (($curday > 8) && ($curday <= 15)) {
       $week = 5;
   }
   else if (($curday > 15) && ($curday <= 22)) {
       $week = 6;
   }
   else if (($curday > 22) && ($curday <= 29)) {
       $week = 7;
   }
   else if ($curday > 29) {
       $week = 8;
       }
}

// THIS IS NOVEMBER ###############################
if ($curmonthN == 11) {
   if ($curday < 5) {
       $week = 8;
   }
   else if (($curday > 5) && ($curday <= 12)) {
       $week = 9;
   }
   else if (($curday > 12) && ($curday <= 19)) {
       $week = 10;
   }
   else if (($curday > 19) && ($curday <= 26)) {
       $week = 11;
   }
   else if (($curday > 26) && ($curday <= 30)) {
       $week = 12;
   }
   else if ($curday > 30) {
       $week = 13;
   }
}

// THIS IS DECEMBER ############################
if ($curmonthN == 12) {
   if (($curday >= 1) && ($curday <= 3)) {
       $week = 13;
   }
   else if (($curday > 3) && ($curday <= 10)) {
       $week = 14;
   }
   else if (($curday > 10) && ($curday <= 17)) {
       $week = 15;
   }
   else if (($curday > 17) && ($curday <= 24)) {
       $week = 16;
   }
   else if ($curday > 24) {
       $week = 17;
   }
}

// THIS IS JANUARY ############################
if ($curmonthN == 1) {
   if ($curday < 30) {
       $week = 17;
   }
}
//echo "Week: $week";

?>
