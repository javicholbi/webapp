<?php

/////////////////////////////////////////////////////////////////////////////
//////////Register comprobations/////////////////////
/////////////////////////////////////////////////////////////////////////////	

	$user = $_POST['user'];
	$password = $_POST['password'];
	$mail = $_POST['mail'];
		
		//Random salt

		$hash="";
	
		$set_salt = "./1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
		//echo strlen($set_salt);
		$salt ='$2y$12$';
		for($i = 0; $i < 22; $i++)
		$salt .=$set_salt[mt_rand(0,63)];
		
		//Encrypting password
		$hash = crypt($password, $salt);
		
		$consulta = "INSERT INTO wa_users ( user, mail, password ) VALUES ('".$user."','".$mail."','".$hash."')";	
		//echo $consulta;
		require_once("bd/connection.php");
		
	    $result = $conexion->query($consulta);
		
		
/////////////////////////////////////////////////////////////////////////////
//////////Random string/////////////////////
/////////////////////////////////////////////////////////////////////////////	

		$aleatorio = $salt.$set_salt[mt_rand(2,63)];
		
		echo "<br>";
			
		
		header("location:index.php");

		//	$conexion=null;
			
		?>