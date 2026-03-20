<?php
require "trofeis-model.php";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trofeis</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">



</head>
<body style="text-align: center;">
    <header>
        <h1>Trofeis</h1>

        <nav>
            <a href="header.html">Home</a>
            <a href="trofeis.html">Trofeis</a>
            <a href="trofeis-novo.html">Novo Trofeu</a>
        </nav>
    </header>
    <main style="text-align: center; align-items: center;">

        <section >
                <?php

                while ($dados_trofeis = $result_set_trofeis->fetch(PDO::FETCH_ASSOC)) {

                    $trofeu_nome = $dados_trofeis["nome"];
                    $trofeu_quantidade = $dados_trofeis["quantidade"];
                    $trofeu_ano = $dados_trofeis["ano"];
                    $trofeu_img = $dados_trofeis["img"];


                    $template_de_article = "
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
                                        <h4>Anos ganhos: $trofeu_ano</h4>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                    ";
                    echo $template_de_article;
                };  
            ?>
        </section>
    </main>
    
</body>
</html>




