<html>
<head>
	<title></title>
</head>
<body>

<form method="POST" action="Destino.php"> 
	<input type="Text" name="Mensaje">
	<input type="submit">


</form>

</body>
</html>

<?php 
//AGREGO EL METHOD PARA QUE UTILIZA ESA FUNCION Y NO GET
echo "Hola PHP<br>";
echo "<br>Voy a mostrar la variable _REQUEST:<br>";
var_dump($_REQUEST); //AL SER VARIABLE SET PASA POR $_REQUEST
//SIEMPRE PROBAR CON VAR_DUMP 
echo "<br><br>Voy a mostrar la variable _GET:<br>";
var_dump($_GET); //AL SER VARIABLE GET PASA POR $_GET
echo "<br><br>Voy a mostrar la variable _POST:<br>";
var_dump($_POST); //MISMO USO QUE _GET. SÓLO SE PUEDE USAR UNO A LA VEZ

echo "<br><br>Voy a mostrar el _POST mediante echo:<br>";
if (isset($_POST["Mensaje"])) { //CON ISSET VALIDO QUE LA VARIABLE NO ESTÉ VACÍA.
	echo $_POST ["Mensaje"]; //MUESTRO LA VARIABLE GUARDADA EN POST, YA QUE ESTOY UTILIZANDO EL METHOD="POST"
}
else{
	echo "La variable _POST ['Mensaje'] está vacía.";
}

//AL AGREGARLE EL ACTION CUANDO APRETO ENVIAR ME LLEVA A LA OTRA PAGINA, OTRO PHP, MOSTRANDOME LOS DATOS AHÍ INDICADOS.
//EL ACTION VA A LEER EL ARCHIVO DECLARADO EN LOS PARÁMETROS.


 ?>