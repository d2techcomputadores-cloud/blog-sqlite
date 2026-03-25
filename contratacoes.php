<?php
require "model-contratacoes.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">

   
    <title>CONTRATAÇÕES</title>
</head>
<body>

    <header>
        <div>
            <img style="width: 200px;" src="img/gremio logo.svg">
        </div>
        
        <nav>
            <a href="header.php">Home</a>
            <a href="contratacoes.php">Contratações</a>
            <a href="nova-contratacao.html">Novo Contratação</a>
            <a href="deletar-contratacao.php">Deletar Contratação</a>
        </nav>   
   
    </header>
    <h2 style="text-align: center;">Contratações</h2>

    <main class="container">

    <?php
        // Lemos todas as linhas (uma por vez) do result set
        while ($dados_contratacoes = $result_set_contratacoes->fetch(PDO::FETCH_ASSOC)) {

            // Pegamos os dados da linha e guardamos em variáveis...
            $contratacao_nome = $dados_contratacoes["nome"];
            $contratacao_posicao = $dados_contratacoes["posicao"];
            $contratacao_time = $dados_contratacoes["time"];
            $contratacao_idade = $dados_contratacoes["idade"];
            $contratacao_nacionalidade = $dados_contratacoes["nacionalidade"];
            $contratacao_valor = $dados_contratacoes["valor"];
            $contratacao_img = $dados_contratacoes["img"];
            

            //...usamos as variáveis para preencher o template
            $template_contratacao = "
            <div  style='text-align: center;'  class='container'>
                <div style='width: 450px; height: 550;' class='card mb-4 rounded-3 shadow-sm'>
                    <div class='card-header py-3'>
                    <img src='<?= $contratacao_img?>'> 
                    </div>
                    <div id='card-body' class='card-body'>
                        <h1 class='card-title pricing-card-title'> $contratacao_nome
                            <small class='text-body-secondary fw-light'>/ $contratacao_posicao</small>
                        </h1>
                        <ul class='list-unstyled mt-3 mb-4'>
                            <h6>Ex Time: $contratacao_time</h6>
                            <h6>Idade: $contratacao_idade</h6>
                            <h6>Nacionalidade: $contratacao_nacionalidade</h6>
                            <h6>Valor: $contratacao_valor</h6>
                        </ul> 
                    </div>           
                </div>
            </div>
            ";

            //Escrevemos o HTML resultante (template + dados)
            echo $template_contratacao;
        }
        ?>
        
    </main>
</body>
</html>