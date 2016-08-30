<?php 

if (isset($_POST["Mensaje"])) { //CON ISSET VALIDO QUE LA VARIABLE NO ESTÉ VACÍA.
	if (strlen($_POST["Mensaje"]) > 5) {
		include "MayorA5.html"; // AL HACER EL INCLUDE VA A ESE ARCHIVO Y EJECUTA LO ALLÍ DECLARADO
	}
	else{
		include "MenorA5.html";	// AL HACER EL INCLUDE VA A ESE ARCHIVO Y EJECUTA LO ALLÍ DECLARADO
	}
	echo $_POST ["Mensaje"];
}

echo "Muestro var_dump<br>";
var_dump($_REQUEST);
var_dump($_POST["Mensaje"]);

 ?>