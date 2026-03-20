<?php
require "index_model.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$blog_nome?></title>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
</head>

<body>
    <header>
        <h1><?=$blog_nome?></h1>
        <nav>
            <a href="header.html">Home</a>
            <a href="index.php">posts</a>
            <a href="novo-post.html">Novo Post</a>
        </nav>
    </header>

    <main>
        <section>
            <h2>Posts</h2>
        <?php


        // Lemos todas as linhas (uma por vez) do result set
        while ($dados_posts = $result_set_posts->fetch(PDO::FETCH_ASSOC)) {

            // Pegamos os dados da linha e guardamos em variáveis...
            $posts_titulo = $dados_posts["titulo"];
            $posts_texto = $dados_posts["texto"];
            $posts_autor = $dados_posts["autor"];
            $posts_data = $dados_posts["data"];
            $posts_img = $dados_posts["img"];
            

            //...usamos as variáveis para preencher o template
            $template_de_article = "
            <article>
                <p>$posts_titulo</p>
                <p>Autor: $posts_autor</p>
                <p>$posts_texto</p>
            </article>
            ";

            //Escrevemos o HTML resultante (template + dados)
            echo $template_de_article;
        }

        ?>
            

        </section>
        
    </main>

    <footer>
        <?=$blog_nome?> - <?=$blog_autor?> - <?=$blog_email_adm?>
    </footer>
</body>
</html>