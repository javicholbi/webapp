<?php session_start(); ?>
<?php include("bd/connection.php"); 
$id = @$_GET["id"]; 
$consulta = "DELETE FROM classification where id=".$id; 

$result = $conexion->query($consulta);

while($fila=$result->fetch());

header("location:index.php");




