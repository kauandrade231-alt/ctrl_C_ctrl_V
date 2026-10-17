<?php 

if($_SERVER["REQUEST_METHOD]"]=== "POST") {
   $nome = $_POST["nome"]??"";
   $email = $_POST["email"]??"";
   $projeto = $_POST["projeto"]??"";

   echo "<h2>Solicitação recebida!<h2>";
   echo "Nome: " . htmlspecialchars($nome) . "<br>";
   echo "Email" . htmlspecialchars($email) . "<br>";
   echo "Projeto" . htmlspecialchars($projeto) . "<br><hr>";
    }
    ?>
 
    
    
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contato</title>
        <link rel="stylesheet" href="contatos.css">

    </head>
    <h1>Solicite seu projeto</h1>

    <form action="contatos.php" method="POST">

    <Label>Seu nome:</Label>
    <input type="text" name="nome" required>
    <link rel="stylesheet" href="contatos.css">
    <br><br>

    <label>Qual projeto você deseja</label>
    <select name="projeto" required>
        <option value="Site">Site</option>
        <option value="Sistema">Sistema</option>
        <option value="Aplicativo">Aplicativo</option>

    </select>
    <br><br>

    <button type="submit">Enviar</button>
    </form>

    <footer>
        <p> Desenvolvido por Francisco Dacol | <a href="#"> Software House Web - Equipe de LP</a> </p>
        <p>HTML + CSS + PHP Raiz</p>
       </footer>
       <br><br>



