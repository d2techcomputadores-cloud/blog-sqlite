<?php

require("conectar_com_banco.php");

$sql_dados_blog = "
SELECT nome, autor, email_adm
FROM blog;
";

$sql_dados_posts = "
SELECT titulo, texto, data, autor, img
FROM posts
ORDER BY postId DESC;
";

$result_set = $conn->query($sql_dados_blog);
$result_set_posts = $conn->query($sql_dados_posts);

$uma_linha = $result_set->fetch(PDO::FETCH_ASSOC);

$blog_nome = $uma_linha["nome"];            
$blog_autor = $uma_linha["autor"];          
$blog_email_adm = $uma_linha["email_adm"];  
?>