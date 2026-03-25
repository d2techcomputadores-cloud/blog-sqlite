<?php

require("conectar_com_banco.php");

$sql_dados_contratacoes = "
SELECT nome, posicao, time, idade, nacionalidade, valor, img
FROM contratacoes
ORDER BY contratacaoId DESC;
";

$result_set_contratacoes = $conn->query($sql_dados_contratacoes);

?>