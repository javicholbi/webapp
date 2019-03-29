<?php
	session_start();

//Data introduced by user
	$user = $_POST['user'];
	$password = $_POST['password'];

	//}			
		require_once("bd/connection.php");
	//user and pass ==
	
		$consulta="SELECT password FROM wa_users WHERE user ='".$user."';";
		$result=$conexion->query($consulta);
		$result=$result->fetch();
		$passwordinBD= $result[0];
		//echo $consulta;
		//echo $result;
		
		if(crypt($password, $passwordinBD) == $passwordinBD)
		{
			$_SESSION['logged']=1;
			$_SESSION['user']=$_POST['user'];	
			
			//echo "recognized";
			header('location:index.php');
		}
		else{	
			//echo "no";
			header('location:index.php');
			}
								
		//}
		
		$conexion=null;

?>