<!DOCTYPE html>
<html>
<head>
	<title>Aplicacion Nro. 23</title>
	<style type="text/css">
		<?php
if (isset($_POST["color"])) { 
	echo 'body {background:'.$_POST["color"].';}';
}
		?>
	</style>
</head>


<body>
<form method="POST">
<select id="color" name="color">
  <option value="#FF0000">Rojo</option>
  <option value="#008000">Verde</option>
  <option value="#0000FF">Azul</option>
  <option value="#D2691E">Chocolate</option>
  <option value="#D2691E">Cyan</option>
  <option value="#F08080">Coral</option>
  
  <input type="submit" value="Cambiar color"> 
</select>
</form>
<?php 


 ?>

</body>
</html>
