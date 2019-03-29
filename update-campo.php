<?php include("bd/connection.php"); 
$id= @$_POST['id']; 
$name = @$_POST['name']; 
$points = @$_POST['points']; 


$consulta = " UPDATE `classification` SET `name`='$name',`points`='$points' WHERE `id`='$id'"; 
$result = $conexion->query($consulta);

header('Location: index.php');
echo 'id ' . $_POST['id'] . ', ' . $_POST['name'] . ', ' . $_POST['points'] . '<br /><br />'; 

?> 



    