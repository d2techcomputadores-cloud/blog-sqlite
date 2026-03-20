<?php

// Conectamos com o banco de dados
require("conectar_com_banco.php");

// Consulta que faremos
$sql_dados_trofeis = "
SELECT nome, quantidade, ano, img
FROM trofeis
ORDER BY trofeuid DESC;
";

//Rodamos a consulta
//result_set contém as linhas de resposta
$result_set_trofeis = $conn->query($sql_dados_trofeis);
?>