<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
$para = "ctrlvctrlc857@gmail.com";
$assunto = "Novo Orçamento de Projeto - Jurídico";


$sobre = $_POST['sobre'];
    $funcao = $_POST['funcao'];
    $como_fazer = $_POST['como_fazer'];
    $orcamento = $_POST['orcamento'];

    $mensagem = "Sobre o projeto: " . $sobre . "\n";
    $mensagem .= "O que deve fazer: " . $funcao . "\n";
    $mensagem .= "Como fazer: " . $como_fazer . "\n";
    $mensagem .= "Orçamento: " . $orcamento . "\n";

    mail($para, $assunto, $mensagem);

    echo "<h1>Análise jurídica solicitada com sucesso!</h1>";


}


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juridico</title>
    <link rel="stylesheet" href="juridico.css">

</head>
<body>

    <p>Antes de ter um orçamento de seu projeto, precisamos ter certeza de que seu projeto é uma coisa legal e dentro dos limites da lei, caso contrário não poderá ser
       feito.
    </p>
 

  <form method="POST">

  <label for="sobre">Sobre o que é seu projeto?</label>
  <div class="campo">
  <textarea id="sobre" name="sobre" rows="4" placeholder="Descreva a ideia geral do projeto"></textarea>
  </div>
  
  <label>O que você deseja que o projeto faça</label>
  <div class="campo">
  <textarea id="sobre" name="sobre" rows="4" placeholder="Descreva qual a função que seu projeto precisa ter"></textarea>
  </div>

  <label>Como gostaria que o projeto seja feito?</label>
  <div class="campo">
  <textarea id="sobre" name="sobre" rows="4" placeholder="De que forma gostaria que seu projeto fosse feito? ex: sistema, site etc"></textarea>
  </div>

  <label>Quanto você pretende gastar com o projeto</label>
  <div class="campo">
  <textarea id="sobre" name="sobre" rows="4" placeholder="qual a quantia que você pretente pagar com base no orçamento?"></textarea>
  </div>
<div class="botao">

 <button type="submit">Enviar</button>
</div>

  </form>

  

  <a href="mailto: ctrlvctrlc857@gmail.com">E-mail</a>

    
</body>
</html>