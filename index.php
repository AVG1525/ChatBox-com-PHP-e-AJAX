<?php  if (isset($_COOKIE['nome'])) { ?>
	
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>ChatBox</title>
		
		<link rel="stylesheet" href="css-aki.css">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script type="text/javascript" src="ajax.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#mensagens').load('ver.php');
				var RefreshId =setInterval(function(){
					$('#mensagens').load('ver.php');
				}, 500);
				$.ajaxSetup({cache:false});
			})
		</script>

	</head>
	<body>
		<div id="mensagens"></div>
		<form method="POST" onsubmit="enviar();return false;">
			<input type="text" name="mensagem" id="mensagem" placeholder="Digite sua Mensagem .." maxlength="50" autocomplete="off">
		</form>
		<a href="sair.php" title="Sair">Sair</a>
	</body>
	</html>
<?php } else {  ?>

	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>ChatBox</title>
	</head>
	<body>
		<form method="POST">
			<input type="text" name="nome" id="nome" placeholder="Digite sua nome:" maxlength="15" autocomplete="off">
			<input type="submit" name="go" id="go" value="Logar">
		</form>

	</body>
	</html>
<?php } 

	if (isset($_POST['go'])) {
		setcookie('nome', $_POST['nome']);
		header('Location: ./');
	}


?>