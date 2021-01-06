<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TI-KRÉTA</title>
<link href="index.css" rel="stylesheet" type="text/css" /><link href="taki.ICO" rel="SHORTCUT ICON" />
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css.css">
  	<link rel="stylesheet" href="bootstrap.min.css">
  	<script src="jquery.min.js"></script>
  	<script src="bootstrap.min.js"></script>
<style>	
body {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: "open sans";
            font-size: 14px;
            font-weight: 400;
            color: #445261;
            background-color: #EEEEEE;
        }
</style>		
</head>

<body>

<div class="container">
  <h2><img alt="" src="taki.ICO">KRÉTA - TAKINFO-TAKI.HU</h2>
  <p>Takács István informatika tanár e-mail: takinfo.taki@freemail.hu</p>                  
  <ul class="nav nav-pills" role="tablist">
    <li><a href="XXX.php">Home</a></li>
    <li class="active"><a href="oje.php">ÖSSZES JEGY</a></li>
    <li><a href="iro.php">IRODALOM</a></li>
    <li><a href="mny.php">MAGYAR NYELV</a></li>
    <li><a href="mat.php">MATEMATIKA</a></li> 
    <li><a href="tes.php">TESTNEVELÉS</a></li>
    <li><a href="any.php">ANGOL NYELV</a></li> 
	<li><a href="fiz.php">FIZIKA</a></li>
	<li><a href="pro.php">PROGRAMOZÁS</a></li>
	<li><a href="pgy.php">PROGRAMOZÁS GYAKORLAT</a></li>
	<li><a href="hal.php">HÁLÓZATOK</a></li>
	<li><a href="hgy.php">HÁLÓZATOK GYAKORLAT</a></li>
	<li><a href="ada.php">ADATBÁZIS RENDSZEREK</a></li>
	<li><a href="1.php">JEGY-1</a></li>
	<li><a href="2.php">JEGY-2</a></li>
	<li><a href="3.php">JEGY-3</a></li>
	<li><a href="4.php">JEGY-4</a></li>
	<li><a href="5.php">JEGY-5</a></li>	
  </ul>
</div>




<div class="container">
<p style align="right"><a href = "index.php">KILÉPÉS</a></p>
<h2 style align="center">Ellenőrző - Galuska Tamás Péter</h2>
<p style align="center">
<?php
	// csatlakozás az adatbázishoz
	//takinfo-taki.hu
    $conn = mysqli_connect('localhost', 'takinfo_galuska', 'galagonya1234') or die("Hibás csatlakozás!");
	// localhost
	//$conn = mysqli_connect('localhost', $f_nev, $jelszo) or die("Hibás csatlakozás!");

    // a karakterek helyes megjelenítése miatt be kell állítani a karakterkódolást!
    mysqli_query($conn, 'SET NAMES UTF-8');
    mysqli_query($conn, "SET character_set_results=utf8");
    mysqli_set_charset($conn, 'utf-8');
    
	//  if ( mysqli_select_db($conn, 'ellenorzo_2020') ) {  ==>> localhost
    if ( mysqli_select_db($conn, 'takinfo_ellenorzo_2020') ) {    // ha sikeres az adatbázis kiválasztása    
        // lekérdezzük a jegyeket a "11d_galuska" táblából
		
		// sql lekérdezések        
        //$sql = "SELECT id, varosnev, megye FROM varosok"; // ez csak egy string, még nem hajtódik végre
		$sql = "select * from 11d_galuska ";
		//sql = "select * from 11d_galuska where jegy = 3";
		//$sql = "select * from 11d_galuska where tantargy_neve = 'matematika' or tantargy_neve = 'fizika' ";
		//$sql = "select * from 11d_galuska where tantargy_neve = 'matematika'";
		//$sql = "select * from 11d_galuska where tantargy_neve = 'matematika' or tantargy_neve = 'fizika' ";

        $res = mysqli_query($conn, $sql) or die ('Hibás utasítás!'); // végrehajtjuk az SQL utasítást

		//print("Név: $f_nev<br>Jelszó: $jelszo<br><br>");
		print("<h3 style align=\"center\"; text-transform: uppercase; \">Összes jegy</h3>");
		print("<table border=\"1\" class=\"table table-condensed table table-striped\">\n");
		print("<tr><td><b>Azonosító</b></td>
				<td><b>Tantárgy neve</b></td>
				<td><b>Jegy</b></td>
				<td><b>Súlyozás</b></td>
				<td><b>Dátum</b></td>
				<td><b>Értékelés módja</b></td>
				<td><b>Értékelés témája</b></td>
				<td><b>Jegyet beírta</b></td>
				<td><b>Jegy állapota</b></td></tr>");
		while ($sor = mysqli_fetch_assoc($res))
			{
				print ("<tr>");
				foreach ($sor as $i=>$ertek)
				{
					print("<td>$ertek</td>");
				}
				print("</tr>");
			}
		print("</table>\n");
			
		mysqli_free_result($res);    // felszabadítjuk a lefoglalt memóriát
    }
	else
		{                                    // nem sikerült csatlakozni az adatbázishoz
			die('Nem sikerült csatlakozni az adatbázishoz.');
		}
 
    mysqli_close($conn); // lezárjuk az adatbázis-kapcsolatot
?>
</p>
</div>
</body>
</html>