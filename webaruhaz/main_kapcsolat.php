<?php
$kapcsolat = mysql_connect("127.0.0.1", "vardaitamas1", "******");
if (!$kapcsolat) die("Nem sikerült kapcsolódni az adatbázishoz!");
mysql_select_db("vardaitamas1", $kapcsolat) or die("Nem sikerült kiválasztani az adatbázist!");
mysql_close($kapcsolat);
?>