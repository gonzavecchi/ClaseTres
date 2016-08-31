<!DOCTYPE html>
<html>
<head>
	<title>Aplicacion Nro. 22</title>
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
<h1>Aplicacion Nro. 22</h1>

<table style="width:25%">


 <?php
 $fila = 6;
 $columna = 4;

  for($t=1;$t<$fila;$t++){
    
    if ($t%2==0){
      echo "<tr style=background-color:#FFFFFF;>"; /*pares*/
    }else{
      echo "<tr style=background-color:#BDBDBD;>"; /*impares*/
    }  

   for($y=1;$y<$columna;$y++){
     echo "<td>".$y.":".$t."</td>";
    }
   echo "</tr>";
  }
 ?>

</table>
</body>
</html>

<!-- Dicha tabla se formará con 3 columnas y 5 filas. En cada celda, colocar las coordenadas de su ubicación. -->