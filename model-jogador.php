<?php

require("conectar_com_banco.php");

$sql_dados_jogadores = "
SELECT nome, posicao, idade, camisa, nacionalidade, img
FROM jogadores
ORDER BY jogadorId DESC;
";

$result_set_jogadores = $conn->query($sql_dados_jogadores);

?>