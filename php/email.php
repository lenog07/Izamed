<?php

	if(isset($_POST['email']) && !empty($_POST['email'])){

	$nome = ($_POST['name']);
	$email = ($_POST['email']);
	$telefone = $_POST['telefone'];
	$mensagem = ($_POST['message']);
	
	$to = "leojunio007@gmail.com";
	$subject = "Contato - Site ";
	$body = "Nome: ".$nome. "\r\n".
		  "Email: ".$email. "\r\n".
		  "Telefone".$telefone. "\r\n".
		  "Mensagem: ".$mensagem;
		  
	$header = "from:leojunio007@gmail.com"."\r\n".
			"Reply-To:".$email."\e\n".
			"X=Mailer:PHP/".phpversion();
	
	if(mail($to,$subject,$body,$header)){
		
		echo("Email enviado com sucesso!");
		
	}else{
		echo("O Email não pode ser enviado");
		
	}
	
   ("<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>");
exit();
	
	


	}

?>