<?php

if(isset($_POST(['email']) && !empty($_POST(['email'])) {

$name = addslashes($_POST(['name']))
$email = addslashes($_POST(['email']))
$message = addslashes($_POST(['message']))

$to = "matheusc039@hotmail.com";
$subject = "Contato - Web";
$body = "Nome: ".$name. "\n"
        "Email: ".$email "\n"
        "Mensagem: ".$message;

$header = "From: teste@teste.com.br"."\r\n"."Reply-To:".$email."\r\n"."X=mailer:PHP/".phpversion();

if(mail($to, $subject, $body, $header)) {

    echo("E-mail enviado com sucesso!");

}else {
    
    echo("E-mail não pode ser enviado");

}

}

?>