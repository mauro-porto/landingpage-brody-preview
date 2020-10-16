<?php

//$nome = addcslashes($_POST['nome']);
//$email = addcslashes($_POST['e-mail']);
//$mensagem = addcslashes($_POST['msg']);


$to = "m.portopereira@gmail.com";
$subject = "Mensagem - Site Carolina Martins";
$body = "Nome: ".$_POST['name']. "\n".
        "Email: ".$_POST['mail']."\n".
        "Mensagem: ".$_POST['message'];

$header = "From: m.portopereira@gmail.com"."\n".
            "Reply-to:".$_POST['e-mail']."\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

        header("location: index.html");

} else{
        echo("O email não pode ser enviado");
}

?>