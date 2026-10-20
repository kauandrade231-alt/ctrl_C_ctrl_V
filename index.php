



<?php
$pagina =  $_GET["secao"] ??"dashboard";


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>software house</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header class="header">
    <div class="logo">


    <h2>CTRL-C <span>CTRL-V</span></h2>

    </div>
   

    <img src="https://i.ibb.co/tpCcZDv6/35766b82-35c5-42b1-83e5-91566854d8c2-removebg-preview-1.png" alt="logo">


    <nav>
    <a href="index.php?secao=dashboard">Início</a>
    <a href="index.php?secao=sobre">Sobre</a>
    <a href="index.php?secao=projetos">Projetos</a>
    <a href="index.php?secao=juridico">Jurídico</a>
    <a href="index.php?secao=contatos">Contato</a>
    </nav>
    </header>
    <main class="conteudo-principal">
    <?php
    switch($pagina){
        case "dashboard":
            include "dashboard.php";
            break;
        case "sobre":
            include "sobre.php";
            break;
        case "projetos":
            include "projetos.php";
            break;
        case "juridico":
            include "juridico.php";
            break;
        case "contatos":
            include "contatos.php";
            break;
        default:
            include "dashboard.php";
    }
    ?>
    </main>

        
        

       
</body>
</html>

<!-- Código feito pelo Kauan de Andrade -->