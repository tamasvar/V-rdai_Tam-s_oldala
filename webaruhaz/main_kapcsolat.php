<?php
$kapcsolat = mysql_connect("127.0.0.1", "vardaitamas1", "******");
if (!$kapcsolat) die("Nem siker�lt kapcsol�dni az adatb�zishoz!");
mysql_select_db("vardaitamas1", $kapcsolat) or die("Nem siker�lt kiv�lasztani az adatb�zist!");
mysql_close($kapcsolat);
?>