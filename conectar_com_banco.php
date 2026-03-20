<?php
require "config_banco.php";
$string_de_conexao = "sqlite:$arquivo_banco";
$conn = new PDO($string_de_conexao);
?>