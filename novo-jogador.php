<?php
// 1. Receber dados do formulário

$nome = $_POST['jogador_nome'];
$posicao = $_POST['jogador_posicao'];
$idade = $_POST['jogador_idade'];
$camisa = $_POST['jogador_camisa'];
$nacionalidade = $_POST['jogador_nacionalidade'];
$img = $_POST['jogador_img'];

// 2. Montar instrução SQL (INSERT)

$sql = "
INSERT INTO jogadores (nome, posicao, idade, camisa, nacionalidade,img)
VALUES (:nome, :posicao, :idade, :camisa, :nacionalidade, :img);
";

// 3. Conectar com o banco

require("conectar_com_banco.php");

// 4. Prepared Statement
// pré-compilamos o SQL antes de enviar ao banco

$stmt = $conn->prepare($sql);

// 5. Passamos os valores antes de executar o comando

$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':posicao', $posicao);
$stmt->bindValue(':idade', $idade);
$stmt->bindValue(':camisa', $camisa);
$stmt->bindValue(':nacionalidade', $nacionalidade);
$stmt->bindValue(':img', $img);

/**
 * Alternativamente, passar um array associativo
 * ao método execute()
 
 * Exemplo:
 
 * $stmt->execute([
 *  ':c1' => value1,
 *  ':c2' => value2
 *   ]);
 */


// 6. Executamos o comando

$stmt->execute(); # aqui o INSERT é enviado ao banco

// 7. Pegamos o valor do ID do novo registro

$id = $conn->lastInsertId();

?>

<?php
require "jogador.php";
?>