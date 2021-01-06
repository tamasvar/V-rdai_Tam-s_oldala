<html lang="hu">
<head>
<?php include 'main_head.php';?>
<style type="text/css">

</style>
</head>
<body>
<div class="container">
	<?php include 'main_fejlec.php';?>
	<?php include 'main_menu.php';?>
	<hr>
	<H1 align="center">KOSÁRBA - <img src="kosar.png" width="50" height="50" alt=""></H1>
	<p align="center"></p>
	<div align="center">
		<H2 align=center>Az Ön által kiválasztott termék:</H2>
	</div>
	<hr>
	<?php
		$termek_id = $_POST["termek_id"];
		//$termek_id1 = $_POST["termek_id1"];
		print ("<br>");


	?>

<?php
include 'main_kapcsolat.php';
// sql lekérdezések
$sql = "SELECT * FROM webaruhaz Where id = \"$termek_id\"";

// A lekérdezés eredménye
$eredmeny = mysql_query($sql, $kapcsolat) or die(print("Nem tudtam az utasítást végrehajtani! A hiba oka: ".mysql_error()));

//$sor = mysql_fetch_array($eredmeny, MYSQL_ASSOC);
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
	
		print("</tr>
    </thead>
	
    <tbody>");

	$eredmeny1 = mysql_query($sql, $kapcsolat) or die(print("Nem tudtam az utasítást végrehajtani! A hiba oka: ".mysql_error()));
	$termek_szamlalo=0;
	while ($sor1 = mysql_fetch_array($eredmeny1,MYSQL_ASSOC))
		{
			$termek_szamlalo++;
			print ("<tr>");
			$mezo_szamlalo=0;
			foreach ($sor1 as $i=>$ertek)
			{
				$mezo_szamlalo++;
				if ($mezo_szamlalo == 1)
					print("<td>$ertek</td>");
				if ($mezo_szamlalo == 2){ 
					print("<td>$ertek</td>");
					$kategoria=$ertek;
				}
				if ($mezo_szamlalo == 3){ 
					print("<td>$ertek</td>");
					$termeknev=$ertek;
				}
				if ($mezo_szamlalo == 4){
					print("<td>$ertek Ft</td>");
					$ar=$ertek;
				}
				if ($mezo_szamlalo == 5)
					print("<td><img src=\"fotok/$ertek\" alt=\"\" height=\"200\"></td>");
				if ($mezo_szamlalo == 6){
					print("<td>$ertek db</td>");
					$mennyiseg=$ertek;
				}
			}
			print("</tr>");
		}
		
print("</table>\n");

print ("<br>

<hr>

<h2 align=\"center\">A megrendelés adatai:</h2>"
);

//print ("A mennyiseg: ".$mennyiseg);
//print (" A termék id: ".$termek_id);










print ("<br>
<form name=\"form\" method=\"post\" action=\"folyamatban1.php\">

	<table width=\"700\" align=\"center\" class=\"table table-bordered\">
	  <tr>
		<td><label>A megrendelt termék neve:</label></td>
		<td>$termeknev</td>
	  </tr>
	  <tr>
		<td><label>A megrendelt termék kategoriája:</label></td>
		<td>$kategoria</td>
	  </tr>
	  <tr>
		<td><label>A megrendelt termék ára:</label></td>
		<td>$ar Ft/db</td>
	  </tr>
	  ");
mysql_close($kapcsolat);
?>	  
	  
	  <tr>
		<td><label>A megrendelt termék mennyisége:</label></td>
		<td><input name="mtm" type="text" id="mtm" size="3" /> db</td>
	  </tr>
	  <tr>
		<td><label>A megrendelõ neve:</label></td>
		<td><input name="mn" type="text" id="mn" size="90" /></td>
	  </tr>
      <tr>
		<td><label for="email">A megrendelõ e-mail címe:</label></td>
		<td><input type="email" class="_form-control" placeholder="valaki@pelda.com" id="email" size="30" ></td>
	  </tr>
	  <tr>
		<td><label>A megrendelõ lakcíme:</label></td>
		<td><input name="ml" type="text" id="ml" size="90" /></td>
	  </tr>
	  <tr>
		<td><label>Szállítási cím:</label></td>
		<td><input name="szc" type="text" id="szc" size="90" /></td>
	  </tr>
	  <tr>
		<td><label>Fizetési mód:</label></td>
		<td>Kiszállításkor utánvétellel történik.</td>
	  </tr>

	</table>
	<p align="center">
	  <button type="submit"> 
	  <div align="center">Megrendelem</div>
	  </button></p>
</form>
	
	
</div>



<br><br><br><br>
</body>
</html>
