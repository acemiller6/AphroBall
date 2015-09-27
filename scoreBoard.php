<?php
$percW = number_format($percW, 3, '.', '');
$perc  = number_format($perc, 3, '.', '');
$percW = substr($percW,0,5);
$perc  = substr($perc,0,5);



echo "
            <tr>
                 <td><table cellspacing=\"1\" cellpadding=\"4\" border=\"0\" bgcolor=\"#000000\"
                  width=\"160\" background=\"../images/grayG.jpg\">
                     <tr>
                        <td width=\"160\">
                        <table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                        <tr>
                           <th width=\"20%\">&nbsp;</th>
                           <td width=\"40%\"><span class=\"score\"><center>Week $week</center></span></td>
                           <td width=\"40%\" valign=top><span class=\"score\">Season </span></td>
                        </tr>
                        <tr>
                           <td height=\"6\"></td>
                           <td height=\"6\"></td>
                           <td height=\"6\"></td>
                        </tr>
                        <tr>
                           <td><span class=\"scoreHeader\">Rank:</span></td>
                           <td><center><span class=\"score\">$rankW </span></center></td>
                           <td><center><span class=\"score\">$rank</span></center> </td>
                        </tr>
                        <tr>
                           <td height=\"6\"></td>
                           <td height=\"6\"></td>
                        </tr>
                        <tr>
                           <td><span class=\"scoreHeader\">Points:</span></td>
                           <td><center><span class=\"score\">$pointsW </span></center></td>
                           <td><center><span class=\"score\">$points </span></center></td>
                        </tr>
                        <tr>
                           <td height=\"6\"></td>
                           <td height=\"6\"></td>
                        </tr>
                        <tr>
                           <td><span class=\"scoreHeader\">Perc:</span></td>
                           <td><center><span class=\"score\">$percW </span></center></td>
                           <td><center><span class=\"score\">$perc </span></center></td>
                        </tr>
                        <tr>
                           <td height=\"6\"></td>
                           <td height=\"6\"></td>
                        </tr>
                        </table>
                        </td>
                     </tr>
                     </table></td>
            </tr>   ";
?>