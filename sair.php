<?php 

	if(isset($_COOKIE['nome']) && isset($_COOKIE['chat'])){
		
		setcookie('nome', null);
		setcookie('chat', null);

		header('Location: index.php');
	}
	
 ?>