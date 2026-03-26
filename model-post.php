<?php

require("conectar_com_banco.php");

$sql_dados_posts = "
SELECT titulo, texto, data, autor, img
FROM posts
ORDER BY postId DESC;
";

$rs_posts = $conn->query($sql_dados_posts);
?>