<?php

date_default_timezone_set('America/Chicago');

// This file is prepared for the 2006 NFL season
// note that all times are in PST, since the server must be on the west coast
//   So, 10 actually would be 12 here, and so forth.

$curmonth  = date("F");   //current month  i.e. July
$curmonthN = date("n");   //current month  i.e.    7
$curday    = date("j");   //current day    i.e.   15
$curyear   = date("Y");   //current year   i.e. 2015
$curhour   = date("G");   //current hour   i.e.   15
$curmin    = date("i");   //current min    i.e.   44
$curdayL   = date("l");   //current day    i.e. Monday
$locked[0] = 0;

//echo "Date(): $curmonth $curday $curyear $curhour:$curmin  $curdayL<br>";

// THIS IS ANY MONTH NOT IN THE REGULAR SEASON ###
if (($curmonthN > 1) && ($curmonthN < 9)) {
   $week = 1;
   $locked[1] = 0;
}

// this file is used to select which week it is for picking games.  The weeks need to be locked
// by kickoff of the first game each week.  The first condition for determining a week should be
// the day of the first game of the prior week.  The second condition should be the day of the first
// game of the current week..
//     i.e.  Week 2, 19th, first game is Sunday.  Week 3, 26th, first game is Sunday
//              else if (($curday > 19) && ($curday <= 26)) {

// THIS IS SEPTEMBER #############################
if ($curmonthN == 9) {
   if (($curday > 1) && ($curday <= 10)) {
       $week = 1;
       if (($curdayL == "Thursday") && ($curhour >= 19)) {
          $locked['1'] = "1";
       }
   }
   else if (($curday > 10) && ($curday <= 17)) {
       $week = 2;
       $locked[1] = 1;
       if (($curdayL == "Thursday") && ($curhour >= 19)) {
          $locked[2] = 1;
          // there are two sundays in this period, don't lock on the first one.
       }
   }
   else if (($curday > 17) && ($curday <= 24)) {  // 24th is a Thursday
       $week = 3;
       $locked[1] = 1;
       $locked[2] = 1;
       if (($curdayL == "Thursday") && ($curhour >= 19)) {  // is it 7pm on Thursday?
          $locked[3] = 2;
       }
   }
   else if (($curday > 24) && ($curday < 27)) {  //If its after Thursday, set the lock to special value of 2
       $week = 3;
       $locked[1] = 1;
       $locked[2] = 1;
       $locked[3] = 2;
   }
   else if ($curday == 27) {   //This is Sunday, its special lock up until noon Central
       $locked[3] = 2;
       if ($curhour >= 12) {
         $locked[3] = 1;
       }
   }
   else if ($curday > 27) {   //After Sunday its obviously next week
       $week = 4;
       $locked[3] = 1;
   }
}

// THIS IS OCTOBER ################################
if ($curmonthN == 10) {
   // normally the first condition would not would not contain the "="
   if ($curday = 1)  {
       $week = 4;
       $locked[1] = 1;
       $locked[2] = 1;
       $locked[3] = 1;
       if (($curdayL == "Thursday") && ($curhour >= 19)) {
          $locked[4] = 1;
       }
   }
   else if (($curday >= 1) && ($curday <= 8)) {
       $week = 5;
       $locked[1] = 1;
       $locked[2] = 1;
       $locked[3] = 1;
       $locked[4] = 1;
       if (($curdayL == "Thursday") && ($curhour >= 19)) {
          $locked[5] = 1;
       }
   }
   else if (($curday > 8) && ($curday <= 15)) {
       $week = 6;
       $locked[1] = 1;
       $locked[2] = 1;
       $locked[3] = 1;
       $locked[4] = 1;
       $locked[5] = 1;
       if (($curdayL == "Thursday") && ($curhour >= 19)) {
          $locked[6] = 1;
       }
   }
   else if (($curday > 15) && ($curday <= 22)) {
       $week = 7;
       $locked[1] = 1;
       $locked[2] = 1;
       $locked[3] = 1;
       $locked[4] = 1;
       $locked[5] = 1;
       $locked[6] = 1;
       if (($curdayL == "Thursday") && ($curhour >= 19)) {
          $locked[7] = 1;
       }
   }
   else if (($curday > 22) && ($curday <= 29)) {
       $week = 8;
       $locked[1] = 1;
       $locked[2] = 1;
       $locked[3] = 1;
       $locked[4] = 1;
       $locked[5] = 1;
       $locked[6] = 1;
       $locked[7] = 1;
       if (($curdayL == "Thursday") && ($curhour >= 19)) {
          $locked[8] = 1;
       }
   }
   else if ($curday > 29) {
       $week = 9;
       $locked[1] = 1;
       $locked[2] = 1;
       $locked[3] = 1;
       $locked[4] = 1;
       $locked[5] = 1;
       $locked[6] = 1;
       $locked[7] = 1;
       $locked[8] = 1;
   }
}

// THIS IS NOVEMBER ###############################
if ($curmonthN == 11) {
   if (($curday >= 1) && ($curday <= 5)) {
       $week = 9;
       $locked[1] = 1;
       $locked[2] = 1;
       $locked[3] = 1;
       $locked[4] = 1;
       $locked[5] = 1;
       $locked[6] = 1;
       $locked[7] = 1;
       $locked[8] = 1;
       if (($curdayL == "Thursday") && ($curhour >= 19)) {
          $locked[9] = 1;
       }
   }
   else if (($curday > 5) && ($curday <= 12)) {
       $week = 10;
       $locked[1] = 1;
       $locked[2] = 1;
       $locked[3] = 1;
       $locked[4] = 1;
       $locked[5] = 1;
       $locked[6] = 1;
       $locked[7] = 1;
       $locked[8] = 1;
       $locked[9] = 1;
       if (($curdayL == "Thursday") && ($curhour >= 19)) {
          $locked[10] = 1;
       }
   }
   else if (($curday > 12) && ($curday <= 19)) {
       $week = 11;
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
       if (($curdayL == "Thursday") && ($curhour >= 19)) {
          $locked[11] = 1;
       }
   }
   else if (($curday > 19) && ($curday <= 26)) {
       $week = 12;
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
       if (($curdayL == "Thursday") && ($curhour >= 11)) {
          $locked[12] = 1;
       }
   }
   else if ($curday > 26) {
       $week = 13;
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
   }

}

// THIS IS DECEMBER ############################
if ($curmonthN == 12) {
   if ($curday <= 3) {
       $week = 13;
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
       if (($curdayL == "Thursday") && ($curhour >= 19)) {
          $locked[13] = 1;
       }
   }
   else if (($curday > 3) && ($curday <= 10)) {
       $week = 14;
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
       if (($curdayL == "Thursday") && ($curhour >= 19)) {
          $locked[14] = 1;
       }
   }
   else if (($curday > 10) && ($curday <= 17)) {
       $week = 15;
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
       if (($curdayL == "Thursday") && ($curhour >= 19)) {
          $locked[15] = 1;
       }
   }
   else if (($curday > 17) && ($curday <= 24)) {
       $week = 16;
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
       if (($curdayL == "Thursday") && ($curhour >= 19)) {
          $locked[16] = 1;
       }
    }
    else if ($curday > 24) {
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
}
// THIS IS JANUARY ############################
if ($curmonthN == 1) {
   if ($curday <= 3) {
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
       if (($curdayL == "Sunday") && ($curhour >= 12)) {
           $locked[17] = 1;
       }
   }
}

//echo "Week: $week";

?>
