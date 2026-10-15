<?php
  if($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<h2>Análise jurídica solicitada com sucesso!</h2>";


    


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

  <div class="campo">
  <label for="sobre">Sobre o que é seu projeto?</label>
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

 <button type="submit">Enviar</button>

  </form>
  

  <a href="mailto: ctrlvctrlc857@gmail.com">E-mail</a>


    
</body>
</html>