function ver(){
	var url;
	url ='ver.php';
	JQuery.get(url, function(data){
		$('#mensagens').empty().append(data);
	});
}
function enviar(){
	var url;
	var mensagem;
	var enviado;

	url ='enviar.php';
	mensagem =$('#mensagem').val();
	$('#mensagem').on('keyup', function(e){
		if(e.which == 13){
			var m =$(this).val();
			m =mensagem.trim();

			if(m.length >= 1){
				$(this).val('');
				enviado =$.post(url, {mensagem:mensagem});
				enviado.done(function(){
					mensagem ='';
					ver();
				});
			}
		}
	});
}