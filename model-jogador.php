<?php

// Conectamos com o banco de dados
require("conectar_com_banco.php");

// Consulta que faremos
$sql_dados_jogadores = "
SELECT nome, posicao, idade, camisa, nacionalidade, img
FROM jogadores
ORDER BY jogadorid DESC;
";

//Rodamos a consulta
//result_set contém as linhas de resposta
$result_set_jogadores = $conn->query($sql_dados_jogadores);

?>