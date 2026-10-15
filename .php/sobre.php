<?php

require_once "sobre-dados.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- CABEÇALHO / MENU DE NAVEGAÇÃO -->
     <header>
        <div> class = "logo">
            <h2>Software <span>House</span></h2>
        </div>
        <nav>
            <a href="inicio.php"></a>
            <a href="sobre.php"></a>
            <a href="projetos.php"></a>
            <a href="juridico.php"></a>
            <a href="contatos.php"></a>
        </nav>
     </header>

     <!-- CONTEÚDO PRINCIPAL -->
      <main>
        <!-- SEÇÃO SOBRE A EMPRESA -->
         <section class ="sobre">
            <div class = "titulo-secao">
                <p>Quem somos?</p>
                <h2>Sobre a nossa Software House</h2>
            </div>
            
            <div class="sobre-conteudo">
                <div class="sobre-texto">
                    <p>
                        Somos uma empresa de desenvolvimento de sistemas focada em criar soluções web eficientes, orgnizadas e de alta usabilidade para otimizar rotinas operacionais e suporte técnico.
                    </p>
                    <p>
                        Nosso projeto integra tecnologias essenciais como HTML semântico, CSS e PHP raiz para gerenciamento de dados via arquivo JSON locais, garantidno leveza e segurança sem dependendências externas.
                    </p>
                </div>

                <!-- EXIBIÇÃO DOS PILARES INSTITUCIONAIS VIA PHP -->
                 <div class="habilidades">
                    <?php foreach ($pilares as $pilar): ?>
                        <div class = "habilidade">
                            <h3><? $pilar["icone"] ?> <?=  htmlspecialchars($pilar["titulo"]) ?></h3>
                            <p><?=  htmlspecialchars($pilar["descricao"]) ?></p>
                        </div>
                    <php foreach; ?>
                </div>
            </div>
         </section>

         <!-- SEÇÃO INTEGRANTES DA EQUIPE -->
          <section class="projetos-secao">
            <div class="titulo-secao">
                <p>Nosso Time</p>
                <h2>Equipe de Desnvolvimento</h2>
            </div>

            <div class ="projetos">
                <?php foreach ($equipe as $index => $membro) : ?>
                    <div class="card">
                        <div class="numero-projeto">
                            0<?= $index + 1?>
                        </div>
                        <h3><?= htmlspecialchars($membro["nome"]) ?></h3>
                        <p><strong><?= htmlspecialchars($membro["funcao"]) ?></p>
                        <p><?= htmlspecialchars($membro["descricao"]) ?></p>
                        <div class="tecnologias></div>">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>PHP</span>  
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
          </section> 

          <!-- SEÇÃO CONTATO -->
           <section id="contato" class="contato">
                    <div class="titulo-secao">
                        <p>Vamos Conversar?</p>
                        <h2>Entre em Contato</h2>
                    </div>
                    <p class="contato-texto">
                        Dúvidas sobre nossas soluções ou suporte técnico? Fale diretamente com a nossa equipe.
                    </p>
                    <div class="contato-links">
                        <a href="WhatsApp: https:"></a>
                        <a href="Email: "></a>
                        <a href="GitHub:"></a>
                    </div>
           </section>
      </main>
</body>
</html>