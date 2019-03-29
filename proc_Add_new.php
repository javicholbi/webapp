<?php include("bd/connection.php"); 
$name = @$_POST['name']; 
$points = @$_POST['points']; 

$consulta = "INSERT INTO classification ( name, points ) VALUES ('".$name."','".$points."')";

$result = $conexion->query($consulta);	

header('Location: index.php');

echo 'id ' . $_POST['id'] . ', ' . $_POST['name'] . ', ' . $_POST['points'] . '<br /><br />'; 

?> 



    