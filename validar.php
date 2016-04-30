<?php  
	$login = $_GET['login'];
	$senha = $_GET['senha'];

    if(($login=='lucas')	
	and ($senha=='123'))
		{
	echo "deu certo";
	header("Location: home.html");
		}else{
	header("location: index.php");
		}




?>