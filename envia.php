<?php

//Capturando dados do formulario do site.
$quebra_linha = "\n";

$nomeCliente = $_POST['nome'];
$emailCliente = $_POST['email'];
$telefoneCliente = $_POST['telefone'];
$assuntoCliente = $_POST['assunto'];
$assuntoClienteOutro = $_POST['outro-assunto'];
$mensagemCliente = $_POST['mensagem'];


//Variaveis para enviar.
$emailsender = "teste@devyour.com.br";
$nomeremetente = "DevYour";
$emaildestinatario = "teste@devyour.com.br";
$comcopia = "elias-neves93@hotmail.com";
$assunto = "Formulario SITE DEVYOUR";
$mensagem = "conteudo";

$mensagemTotal = "Nome do Cliente: ".$nomeCliente." ".$quebralinha.""."E-mail do Cliente: ".$emailCliente." ".$quebralinha.""."Telefone do cliente: ".$telefoneCliente." ".$quebralinha.""."Assunto: ".$assuntoCliente." ".$quebralinha.""."Assunto OUTRO: ".$assuntoClienteOutro." ".$quebralinha.""."Mensagem do cliente: ".$mensagemCliente." ".$quebralinha;

$header = "MINE-Version: 1.1".$quebra_linha;
$header .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
$header .= "From: ".$emailsender.$quebra_linha;
$header .= "Return-Path: ".$emailsender.$quebra_linha;
$header .= "Cc: ".$comcopia.$quebra_linha;
$header .= "Reply-To: ".$emailsender.$quebra_linha;
mail($emaildestinatario, $assunto, $mensagemTotal, $headers, "-r". $emailsender);

echo '
    <script>
        alert("Mensagem enviada com sucesso!");
        window.location.href = "index.html";
    </script>';
    
?>
