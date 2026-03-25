<?php

require("conectar_com_banco.php");

$sql_dados_posts = "
SELECT postId, titulo, autor
FROM posts
ORDER BY postId DESC;
";

$rs_posts = $conn->query($sql_dados_posts);

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
</head>

<body>
    <header>
        <div>
            <img style="width: 200px;" src="img/gremio logo.svg">
        </div>

    <nav>
        <a href="header.php">Home</a>
        <a href="index.php">Posts</a>
        <a href="novo-post.html">Novo Post</a>
        <a href="deletar-post.php">Deletar Post</a>
    </nav>
    
    </header>
    <h2 style="text-align: center;">Deletar Post</h2>
    <table>
        <thead>
            <th style='text-align: center;'>Autor</th>
            <th style='text-align: center;'>Título</th>
            <th style='text-align: center;'>Comando</th>
        </thead>

        <tbody>
            <?php
            
            while($um_post = $rs_posts->fetch(PDO::FETCH_ASSOC)) {
                $titulo = $um_post['titulo'];
                $autor = $um_post['autor'];
                $id = $um_post['postId'];

                $linha_com_post = "
                <tr>
                    <td <td style='text-align: center;'>$autor</td>
                    <td <td style='text-align: center;'>$titulo</td>
                    <td style='text-align: center;'>
                        <a style='color: white; background-color: red; border-radius: 8px; padding: 6px;'  
                        href='ctrl-apagar-post.php?id=$id'>Deletar</a></td>
                </tr>
                ";

                echo $linha_com_post;
            }

            ?>
        <tbody>
    </table>
</body>
</html>