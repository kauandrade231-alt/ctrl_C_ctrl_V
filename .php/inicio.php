



<?php
$pagina = "dashboard";
if(isset($_GET["secao"])){

        $pagina = $GET["secao"];

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>software house</title>
</head>
<body>
    <header>
    <div class="logo">

    <h2>CTRL-C <span>CTRL-V</span></h2>

    </div>
    <h2>software house</h2>

    <nav>
    <a href="inicio.php?secao=dashboard">Início</a>
    <a href="inicio.php?secao=sobre">Sobre</a>
    <a href="inicio.php?secao=projetos">Projetos</a>
    <a href="inicio.php?secao=juridico">Jurídico</a>
    <a href="inicio.php?secao=contatos">Contato</a>
    </nav>
    </header>
    
</body>
</html>