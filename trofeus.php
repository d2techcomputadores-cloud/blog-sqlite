<?php
require "trofeus-model.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Troféus</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">



</head>
<body style="text-align: center;">
    <header>
        
        <div>
            <img style="width: 200px;" src="img/gremio logo.svg">
        </div>

        <nav>
            <a href="header.php">Home</a>
            <a href="trofeus.php">Troféus</a>
            <a href="novo-trofeu.html">Novo Troféu</a>
            <a href="deletar-trofeu.php">Deletar Troféu</a>
        </nav>
    </header>
    <main style="text-align: center; align-items: center;">
        <h2 style="text-align: center;">Troféus</h2>
                
                <?php

                while ($dados_trofeus = $rs_trofeus->fetch(PDO::FETCH_ASSOC)) {

                    $trofeu_nome = $dados_trofeus["nome"];
                    $trofeu_quantidade = $dados_trofeus["quantidade"];
                    $trofeu_ultimo = $dados_trofeus["ultimo"];
                    $trofeu_img = $dados_trofeus["img"];

                    $template_de_trofeu = "
                        <div  style='text-align: center;' class='container'>
                            <div style='width: 450px; height: 550; alight-items: center;' class='card mb-4 rounded-3 shadow-sm'>
                                <div class='card-header py-3'>
                                <img src=' $trofeu_img'> 
                                </div>
                                <div id='card-body' class='card-body'>
                                    <h1 class='card-title pricing-card-title'>$trofeu_nome
                                        <small class='text-body-secondary fw-light'></small>
                                    </h1>
                                    <ul class='list-unstyled mt-3 mb-4'>
                                        <h4>Quantidade: $trofeu_quantidade</h4>
                                        <h4>Ultima vez conquistado: $trofeu_ultimo</h4>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    ";
                    echo $template_de_trofeu;
                };  
            ?>
    </main>
</body>
</html>