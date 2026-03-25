<?php

require("conectar_com_banco.php");

$sql_dados_jogadores = "
SELECT jogadorId, nome, posicao, idade, camisa, nacionalidade
FROM jogadores
ORDER BY jogadorId DESC;
";

$rs_jogadores = $conn->query($sql_dados_jogadores);

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.css">
</head>

<body>
    <header>
        <div>
            <img style="width: 200px;" src="img/gremio logo.svg">
        </div>

    <nav>
        <a href="header.php">Home</a>
        <a href="jogador.php">Jogadores</a>
        <a href="novo-jogador.html">Novo Jogador</a>
        <a href="deletar-jogador.php">Deletar Jogador</a>
    </nav>
    
    </header>
    <h2 style="text-align: center;">Deletar Jogador</h2>
    <table>
        <thead>
            <th style="text-align: center;">Nome</th>
            <th style="text-align: center;">Posição</th>
            <th style="text-align: center;">Idade</th>
            <th style="text-align: center;">Camisa</th>
            <th style="text-align: center;">Nacionalidade</th>
            <th style="text-align: center;">Comando</th>
        </thead>

        <tbody>

            <?php
            
            while($um_jogador = $rs_jogadores->fetch(PDO::FETCH_ASSOC)) {
                $nome = $um_jogador['nome'];
                $posicao = $um_jogador['posicao'];
                $idade = $um_jogador['idade'];
                $camisa = $um_jogador['camisa'];
                $nacionalidade = $um_jogador['nacionalidade'];
                $id = $um_jogador['jogadorId'];

                $linha_com_jogador = "
                <tr>
                    <td style='text-align: center;'>$nome</td>
                    <td style='text-align: center;'>$posicao</td>
                    <td style='text-align: center;'>$idade</td>
                    <td style='text-align: center;'>$camisa</td>
                    <td style='text-align: center;'>$nacionalidade</td>
                    <td style='text-align: center;'>
                        <a style='color: white; background-color: red; border-radius: 8px; padding: 6px;'
                        href='ctrl-apagar-jogador.php?id=$id'>Deletar</a>
                    </td>
                </tr>
                ";

                echo $linha_com_jogador;
            }

            ?>
        <tbody>
    </table>
</body>
</html>