<html lang="hu">
<head>
<?php include 'main_head.php';?>
</head>
<body>
<div class="container">
<?php include 'main_fejlec.php';?>
<?php include 'main_menu.php';?>
<hr>
<?php include 'main_kapcsolat.php';?>	


<?php
// sql lekérdezések
$sql = "SELECT * FROM webaruhaz Where kategoria = \"ventillator\"";

// A lekérdezés eredménye
$eredmeny = mysql_query($sql, $kapcsolat) or die(print("Nem tudtam az utasítást végrehajtani! A hiba oka: ".mysql_error()));

//$sor = mysql_fetch_array($eredmeny, MYSQL_ASSOC);
print("<H2>Kategória: Ventillátor</H2>");
print("<table class=\"table table-condensed table table-striped\">
    <thead>
		<tr>");
			//$sor = mysql_fetch_array($eredmeny,MYSQL_ASSOC);
			//while (list($k, $v) = each($sor))
			//{
				//print("<th style= \"width: 2%\">$k</th>");
			//}	
		print("<th style= \"width: 2%\">Sorszám</th>");
		print("<th style= \"width: 2%\">Kategória</th>");
		print("<th style= \"width: 2%\">Terméknév</th>");
		print("<th style= \"width: 2%\">Ár</th>");
		print("<th style= \"width: 2%\">Fotó</th>");
		print("<th style= \"width: 2%\">Készlet</th>");
		print("<th style= \"width: 2%\">Vásárlás</th>");
	
		print("</tr>
    </thead>
	
    <tbody>");

	$eredmeny1 = mysql_query($sql, $kapcsolat) or die(print("Nem tudtam az utasítást végrehajtani! A hiba oka: ".mysql_error()));
	while ($sor1 = mysql_fetch_array($eredmeny1,MYSQL_ASSOC))
		{
			$termek_szamlalo++;
			print ("<tr>");
			$mezo_szamlalo=0;
			foreach ($sor1 as $i=>$ertek)
			{
				$mezo_szamlalo++;
				if ($mezo_szamlalo == 1)
					{
						print("<td>$termek_szamlalo</td>");
						$termek_id=$ertek; $termek_id1=$ertek;
					}
				if ($mezo_szamlalo == 2) 
					print("<td>$ertek</td>");
				if ($mezo_szamlalo == 3) 
					print("<td>$ertek</td>");
				if ($mezo_szamlalo == 4)
					print("<td>$ertek Ft</td>");
				if ($mezo_szamlalo == 5)
					print("<td><img src=\"fotok/$ertek\" alt=\"\" height=\"200\"></td>");
				if ($mezo_szamlalo == 6) 
					print("<td>$ertek db</td>");
				if ($mezo_szamlalo == 7)
				print("<td>
						<form name=\"form1\" method=\"post\" action=\"kosar_vasarlas.php\">
						<input name=\"termek_id\" type=\"hidden\" id=\"termek_id\" value=\"$termek_id\">
						Kosárba<br>
						<input type=\"image\" name=\"kosar_kepe\" src=\"kosar.png\" alt=\"\" height=\"50\" widht=\"50\">
						</form>
					   </td>");
			}
			print("</tr>");
		}
		
print("</table>\n");
mysql_close($kapcsolat);
?>

<hr>
</div>
</body>
</html>
