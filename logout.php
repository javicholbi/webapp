<?php
	session_start();
	
	//IF YOU ARE LOGGED IN  DESTROY THE SESSION
	if(isset($_SESSION['logged'])){	
		
		session_unset();	
		
		session_destroy();
		
		setcookie("cookie","Hey",time()+0);
		
		//Redirecc to index
		
		header('location:index.php');		
	
	}else{	
	
		header('location:index.php');
		
		}
?>
