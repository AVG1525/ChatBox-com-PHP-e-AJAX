<?php 

	include 'conexao.php';
	date_default_timezone_get('America/Sao_Paulo');

	if(isset($_COOKIE['nome'])){
		$nome =strip_tags($_COOKIE['nome']);
		$mensagem =htmlspecialchars($_POST['mensagem']);
		$hora =date('H:i:s');
		$ip =$_SERVER['REMOTE_ADDR'];

		$sql =$conn->prepare('INSERT INTO mensagens(nome, mensagens, hora, ip) VALUES(:nome, :mensagens, :hora, :ip);');
		$sql->bindParam(':nome', $nome);
		$sql->bindParam(':mensagens', $mensagem);
		$sql->bindParam(':hora', $hora);
		$sql->bindParam(':ip', $ip);
		$sql->execute();
	
		$count =$sql->rowCount();
		setcookie('chat', $count);
	}

 ?>