<!DOCTYPE html>
<html>
<head>
	<title>Aplicacion Nro. 21</title>
	<style>
table, th, td {
    border: 1px solid black;
}
th, td {
    text-align: center;
}
</style>
</head>
<body>
<h1>Aplicacion Nro. 21</h1>

<table style="width:25%">


 <?php
 $fila = 5;
 $columna = 3;

  for($t=0;$t<$fila;$t++){
  echo "<tr>";
  for($y=0;$y<$columna;$y++){
     echo "<td>".$y.":".$t."</td>";
   }
   echo "</tr>";
  }
 ?>

</table>
</body>
</html>

<!-- Dicha tabla se formará con 3 columnas y 5 filas. En cada celda, colocar las coordenadas de su ubicación. -->