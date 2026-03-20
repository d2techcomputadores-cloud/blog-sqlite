<?php

// Conectamos com o banco de dados
require("conectar_com_banco.php");

// Consulta que faremos
$sql_dados_blog = "
SELECT nome, autor, email_adm
FROM blog;
";

$sql_dados_posts = "
SELECT titulo, texto, data, autor, img
FROM posts
ORDER BY postid DESC;
";

//Rodamos a consulta
//result_set contém as linhas de resposta
$result_set = $conn->query($sql_dados_blog);
$result_set_posts = $conn->query($sql_dados_posts);

// Recuperamos 1 linha do result set
// a cada vez que invocamos fetch() recebemos a próxima linha
$uma_linha = $result_set->fetch(PDO::FETCH_ASSOC);

// $uma_linha é um array associativo (um map)
// onde:    chave = nome da coluna do result set
//          valor = valor da coluna na linha atual

$blog_nome = $uma_linha["nome"];            // Acessamos os resultados 
$blog_autor = $uma_linha["autor"];          // e atribuímos eles às variáveis
$blog_email_adm = $uma_linha["email_adm"];  // que a View precisa exibir


?>