<?php
//Set these variables to connect //
$host = "localhost";
$username = "";
$password = "";
$database = "";

//Do not edit below this line //
$con = mysql_connect("$host","$username","$password");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("$database", $con);

?>
