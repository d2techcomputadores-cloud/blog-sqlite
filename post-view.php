<?php
require "post_model.php";
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<?php

            //lemos todas as linhas do result set
            while($posts = $rs_posts->fetch(PDO::FETCH_ASSOC)) {

                // POSTS
                $posts_titulo = $posts["titulo"];
                $posts_data = $posts["data"];
                $posts_texto = $posts["texto"];
                $posts_autor = $posts["autor"];
                $posts_img = $posts["img"];
            

                //uso das variaveis
                $template_post = "
                    <div class='row g-0 border'>
                        <div style='background-color: gray;' class='col p-4 d-flex flex-column position-static'>  <strong></strong>
                            <h3>$posts_titulo</h3>
                            <div style='gray;'>$posts_data</div>
                            <p>$posts_texto
                            </p> <a href='#' class='icon-link gap-1 icon-link-hover stretched-link'>Ler mais.</a>
                        </div>
                        <div class='col-auto'>
                            <title>Placeholder</title>
                            <img style='width: 180px; height: 180;' src=$posts_img>
                            </svg> 
                        </div>
                    </div>
                ";
            

                echo $template_post;
            }
            ?>

</body>
</html>