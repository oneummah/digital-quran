<?php
$s1 = $_GET['suranumber'];
include("config.php");
mysql_query ('SET NAMES utf8');
$result = mysql_query("SELECT * FROM metadata WHERE suranum='$s1'");

while($row = mysql_fetch_array($result))
  {
  echo "<div class='header'>";
  echo "<span class='atitle'>";
  echo $row['name'];
  echo "</span>";
  echo "<br />";
  echo "<span class='ttitle'>";
  echo $row['tname'];
  echo " / </span>";
  echo "<span class='etitle'>";
  echo $row['ename'];
  echo "</span><br />";
  echo "<span class='revelation'>";
  echo "Revelation: ";
  echo $row['type'];
  echo "</span>";
  echo "</div>";
  }
?>
