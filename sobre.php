<?php

require_once __DIR__ . "/sobre-dados.php";
?>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sobre.css">
</head>

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
                            <h3><?=  htmlspecialchars ($pilar["icone"]) ?> <?=  htmlspecialchars($pilar["titulo"]) ?></h3>
                            <p><?=  htmlspecialchars($pilar["descricao"]) ?></p>
                        </div>
                    <?php endforeach; ?>
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
                        <p><strong><?= htmlspecialchars($membro["funcao"]) ?></strong></p>
                        <p><?= htmlspecialchars($membro["descricao"]) ?></p>
                        <div class="tecnologias">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>PHP</span>  
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
          </section> 
      </main>


      <!-- RODAPÉ -->
       <footer>
        <p> Desenvolvido por Francisco Dacol | <a href="#"> Software House Web - Equipe de LP</a> </p>
        <p>HTML + CSS + PHP Raiz</p>
       </footer>
</body>
