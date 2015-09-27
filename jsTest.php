<?php

echo "
<html>
<head>
<title>Test PHP</title>
<script language=\"JavaScript\" src=\"./userIDValidate.js\"></script>
</head>

<body>";

$sub            = $_POST['submit'];
$uid            = $_POST['userid'];

$p = explode (" ", $uid);
$num = count($p);


echo "
<form name=\"user\" method=POST action=\"$PHP_SELF\">
  <p>User name: $uid  -- ($num)<br>
  <input type=text name=\"userid\">
  <input type=submit name=\"submit\" value=\"Create Account\">
</form>
</body>
</html>";
?>
