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
	<H1 align="center">KOS�RBA - <img src="kosar.png" width="50" height="50" alt=""></H1>
	<p align="center"></p>
	<div align="center">
		<H2 align=center>Az �n �ltal kiv�lasztott term�k:</H2>
	</div>
	<hr>
	<?php
		$termek_id = $_POST["termek_id"];
		//$termek_id1 = $_POST["termek_id1"];
		print ("<br>");


	?>

<?php
include 'main_kapcsolat.php';
// sql lek�rdez�sek
$sql = "SELECT * FROM webaruhaz Where id = \"$termek_id\"";

// A lek�rdez�s eredm�nye
$eredmeny = mysql_query($sql, $kapcsolat) or die(print("Nem tudtam az utas�t�st v�grehajtani! A hiba oka: ".mysql_error()));

//$sor = mysql_fetch_array($eredmeny, MYSQL_ASSOC);
print("<table class=\"table table-condensed table table-striped\">
    <thead>
		<tr>");
			//$sor = mysql_fetch_array($eredmeny,MYSQL_ASSOC);
			//while (list($k, $v) = each($sor))
			//{
				//print("<th style= \"width: 2%\">$k</th>");
			//}	
		print("<th style= \"width: 2%\">Sorsz�m</th>");
		print("<th style= \"width: 2%\">Kateg�ria</th>");
		print("<th style= \"width: 2%\">Term�kn�v</th>");
		print("<th style= \"width: 2%\">�r</th>");
		print("<th style= \"width: 2%\">Fot�</th>");
		print("<th style= \"width: 2%\">K�szlet</th>");
	
		print("</tr>
    </thead>
	
    <tbody>");

	$eredmeny1 = mysql_query($sql, $kapcsolat) or die(print("Nem tudtam az utas�t�st v�grehajtani! A hiba oka: ".mysql_error()));
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

<h2 align=\"center\">A megrendel�s adatai:</h2>"
);

//print ("A mennyiseg: ".$mennyiseg);
//print (" A term�k id: ".$termek_id);










print ("<br>
<form name=\"form\" method=\"post\" action=\"folyamatban1.php\">

	<table width=\"700\" align=\"center\" class=\"table table-bordered\">
	  <tr>
		<td><label>A megrendelt term�k neve:</label></td>
		<td>$termeknev</td>
	  </tr>
	  <tr>
		<td><label>A megrendelt term�k kategori�ja:</label></td>
		<td>$kategoria</td>
	  </tr>
	  <tr>
		<td><label>A megrendelt term�k �ra:</label></td>
		<td>$ar Ft/db</td>
	  </tr>
	  ");
mysql_close($kapcsolat);
?>	  
	  
	  <tr>
		<td><label>A megrendelt term�k mennyis�ge:</label></td>
		<td><input name="mtm" type="text" id="mtm" size="3" /> db</td>
	  </tr>
	  <tr>
		<td><label>A megrendel� neve:</label></td>
		<td><input name="mn" type="text" id="mn" size="90" /></td>
	  </tr>
      <tr>
		<td><label for="email">A megrendel� e-mail c�me:</label></td>
		<td><input type="email" class="_form-control" placeholder="valaki@pelda.com" id="email" size="30" ></td>
	  </tr>
	  <tr>
		<td><label>A megrendel� lakc�me:</label></td>
		<td><input name="ml" type="text" id="ml" size="90" /></td>
	  </tr>
	  <tr>
		<td><label>Sz�ll�t�si c�m:</label></td>
		<td><input name="szc" type="text" id="szc" size="90" /></td>
	  </tr>
	  <tr>
		<td><label>Fizet�si m�d:</label></td>
		<td>Kisz�ll�t�skor ut�nv�tellel t�rt�nik.</td>
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
