<?php

// sql lek�rdez�s
$sql = "SELECT * FROM 'webaruhaz'";

// A lek�rdez�s eredm�nye
$eredmeny = mysql_query($sql, $kapcsolat) or die(print("Nem tudtam az utas�t�st v�grehajtani! A hiba oka: ".mysql_error()));

// A lek�rdez�s ki�rat�sa
print("<H2>A V�rdai Tam�s web�ruh�z tartalma</H2>");
print("<table class=\"table table-condensed table table-striped\">
	<thead>
		<tr>");
// Az eredm�nyt�bla mez�neveinek ki�rat�sa
$sor = mysql_fetch_array($eredmeny,MYSQL_ASSOC);
while (list($k, $v) = each($sor))
	{
		print("<th style= \"width: 2%\">$k</th>");
	}		
print("</tr>
	</thead>");
// Az eredm�nyt�bla tartalm�nak ki�rat�sa	
print("<tbody>");
$eredmeny1 = mysql_query($sql, $kapcsolat) or die(print("Nem tudtam az utas�t�st v�grehajtani! A hiba oka: ".mysql_error()));
while ($sor1 = mysql_fetch_array($eredmeny1,MYSQL_ASSOC))
	{
		print ("<tr>");
		$mezo_szamlalo=0;
		foreach ($sor1 as $i=>$ertek)
		{
			$mezo_szamlalo++;
			if ($mezo_szamlalo == 1)
				{$termek_id=$ertek; $termek_id1=$ertek;}
			if ($mezo_szamlalo < 4) 
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
						Kos�rba<br>
						<input type=\"image\" name=\"kosar_kepe\" src=\"kosar.png\" alt=\"\" height=\"50\" widht=\"50\">
						
						</form>
					   </td>");							
		}
		print("</tr>");
	}		
print("</table>\n");
mysql_close($kapcsolat);
?>