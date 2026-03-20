<?php
//conectamos com banco
require("conectar_com_banco.php");

$sql_dados_posts = "
Select titulo, texto, autor, data, img
from posts;
";

$rs_posts = $conn->query($sql_dados_posts);
?>