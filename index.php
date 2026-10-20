



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
    <header>
    <div class="logo">
    <img src="" alt="logo">

    <h2>CTRL-C <span>CTRL-V</span></h2>

    </div>
    <h2>SOFTWARE HOUSE</h2>

    <nav>
    <a href="index.php?secao=dashboard">Início</a>
    <a href="index.php?secao=sobre">Sobre</a>
    <a href="index.php?secao=projetos">Projetos</a>
    <a href="index.php?secao=juridico">Jurídico</a>
    <a href="index.php?secao=contatos">Contato</a>
    </nav>
    </header>
    <main>
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
