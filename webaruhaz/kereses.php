<html lang="hu">
<head>
<?php include 'main_head.php';?>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<div class="container">
	<?php include 'main_fejlec.php';?>
	<?php include 'main_menu.php';?>
	<hr>
	<H1 align="center">Keres�s a V�rdai Tam�s web�ruh�zban</H1>

    <!--   
		<p align="center">
			<a href="#" data-toggle="tooltip" title="Szak�rt�k lyukhoz k�pest.">
				<img src="kollazs.jpg" width="300" height="200" alt="" >
			</a>
		</p>
	-->

	<hr>
	<br><br><br><br>
  <div align="center">
  

  
		<form action="kereses_eredmenye.php">
			<div align="center" style="width:300" class="form-group">
				<label for="sel1">
				<div align="center">Kateg�ria</div>
				</label>
				<div align="center">
				  <select class="form-control" id="sel1" name="sellist1">
				    <option>Minden term�k</option>
				    <option>Alaplap</option>
				    <option>Monitor</option>
				    <option>Mem�riak�rtya</option>
				    <option>Processzor</option>
				    <option>Ventill�tor</option>
				    <option>Vide�k�rtya</option>
			      </select>
				  <br>
				</div>
				<label for="sel2">
				<div align="center">�r</div>
			    </label>
				<div align="center">
				  <select class="form-control" id="sel2" name="sellist2">
				    <option>< 1000 Ft</option>
				    <option>< 10000 Ft</option>
				    <option>< 50000 Ft</option>
				    <option>< 100000 Ft</option>
				    <option>< 500000 Ft</option>
				    <option>< 1000000 Ft</option>
			      </select>
				</div>
			</div>
			<div align="center">
			<br>
			  <button type="submit" class="btn btn-primary">Keres�s</button>
		  </div>
		</form>
	
	</div>



</div>
</body>
</html>
