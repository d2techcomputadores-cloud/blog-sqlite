<?php
require "model-jogador.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">

   
    <title>JOGADORES</title>
</head>
<body>


    <header>
        <h1>Jogadores do <span style="color: skyblue;">Grêmio</span></h1>
        
        <nav>
            <a href="header.html">Home</a>
            <a href="jogador.php">Jogadores</a>
            <a href="novo-jogador.html">Novo Jogador</a>
        </nav>   
   
    </header>

    <main class="container">

    <?php
        // Lemos todas as linhas (uma por vez) do result set
        while ($dados_jogadores = $result_set_jogadores->fetch(PDO::FETCH_ASSOC)) {

            // Pegamos os dados da linha e guardamos em variáveis...
            $jogador_nome = $dados_jogadores["nome"];
            $jogador_posicao = $dados_jogadores["posicao"];
            $jogador_idade = $dados_jogadores["idade"];
            $jogador_camisa = $dados_jogadores["camisa"];
            $jogador_nacionalidade = $dados_jogadores["nacionalidade"];
            $jogador_img = $dados_jogadores["img"];
            

            //...usamos as variáveis para preencher o template
            $template_jogador = "
            <div  style='text-align: center;'  class='container'>
                <div style='width: 450px; height: 550;' class='card mb-4 rounded-3 shadow-sm'>
                    <div class='card-header py-3'>
                    <img src='<?= $jogador_img?>'> 
                    </div>
                    <div id='card-body' class='card-body'>
                        <h1 class='card-title pricing-card-title'> $jogador_nome
                            <small class='text-body-secondary fw-light'>/ $jogador_posicao</small>
                        </h1>
                        <ul class='list-unstyled mt-3 mb-4'>
                            <h6>Idade: $jogador_idade</h6>
                            <h6>Camisa n°: $jogador_camisa</h6>
                            <h6>Nacionalidade: $jogador_nacionalidade</h6>
                        </ul> 
                    </div>           
                </div>
            </div>
            ";

            //Escrevemos o HTML resultante (template + dados)
            echo $template_jogador;
        }

        ?>
        
    </main>
    
</body>
</html>