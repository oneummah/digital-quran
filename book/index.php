<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl"> 
 
<head> 
	<title>Holy Qur'an: Arabic with parallel English translation</title>
	<meta name="description" content="Side-by-side Arabic Holy Qur'an with English translation by Yusuf Ali" /> 
	<meta name="keywords" content="Quran Text, parallel, side-by-side, Verified, Qur'an, Al-Qur'an, Kuran, Koran, Translation, one ummah,  قرائت ,قرآن كريم ,ترجمه,دقيق" /> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<link href="styles/arabic-style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="container">
<?php
$s1 = $_GET['suranumber'];
?>
<div id="header">
<div id="navcontainer">
<ul id="navlist">
<li><a href="http://www.oneummah.net/quran/">Home</a></li>
<li><a href="<?php $previous = $s1 - 1; print $previous ?>.html">Previous Sura</a></li>
<li id="active"><a href="#" id="current">Current Sura</a></li>
<li><a href="<?php $next = $s1 + 1; print $next ?>.html">Next Sura</a></li>
<li><a href="http://www.oneummah.net">OneUmmah.Net</a></li>
</ul>

</div>

</div>
<?php
include("config.php");
include("metadata.php");
mysql_query ('SET NAMES utf8');
echo "<table class='qurantext'>";
//include("metadata.php");
$result = mysql_query("SELECT * FROM quran_text, Quran WHERE sura='$s1' AND SuraID='$s1' AND VerseID=aya");

//$result = mysql_query($sql) or die(mysql_error()); 

while($row = mysql_fetch_array($result))
  {
  echo "<tr class='verserows'>";
  echo "<td class='column1'>";
  echo $row['text'];
  echo "</td><td class='column2'>";
  echo " (";
  echo $row['VerseID'];
  echo ") ";
  echo $row['AyahText'];
  echo "</td></tr>";
  }

echo "</table>";
mysql_close($con);

?>
<div class="clr"></div>
<div id="footer">

<p>A Project of the Bayt al-Hikmah Digital Library, sponsored by <a href="http://www.oneummah.net">One Ummah Network</a>.<br />
Arabic text provided by <a href="http://tanzil.info/wiki/Tanzil_Project">The Tanzil Project</a> and released under a <a href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons</a> License.<br />
Translation provided by <a href="http://qurandatabase.org/">Quran Database</a>.</p>
<div/>

</div>
</body>
</html>
