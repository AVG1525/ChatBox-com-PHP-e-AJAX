<?php 
	include 'conexao.php';

	if(isset($_COOKIE['nome'])){
		$nomec =$_COOKIE['nome'];
		$sql =$conn->prepare('SELECT * FROM mensagens;');
		$sql->execute();
		$count =$sql->rowCount();

		if($count > 0){
			
			echo "<p style='margin-top:-1px;'>Seja bem-vindo ".$nomec.".</p><br/>";	
			foreach ($sql->fetchALL() as $row) {
				$nome =$row['nome'];
				$mensagem =$row['mensagens'];
				$hora =$row['hora'];
				$ip =$row['ip'];

				echo "<p style='margin-top:-12px;'><b title='".$hora."'>".$nome."</b>: ".$mensagem."</p>";
			}
				

		} else {
			echo "<p style='margin-top:-1px;'>Seja bem-vindo ".$nomec.", use o chat com moderação</p><br/>";
			echo "<p style='margin-top:-12px;'>Nenhuma mensagem até o momento ..</p>";
		}
	}	

	$c =$_COOKIE['chat'];

	if ($count != $c) {
		setcookie('chat', $count);
		echo "<script>$('#mensagens').animate({scrollTop: 9999}, 100);</script>";
	}

 ?>