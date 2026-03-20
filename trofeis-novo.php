<?php
// 1. Receber dados do formulário

$nome = $_POST['trofeu_nome'];
$quantidade = $_POST['trofeu_quantidade'];
$ano = $_POST['trofeu_ano'];
$img = $_POST['trofeu_img'];

// 2. Montar instrução SQL (INSERT)

$sql = "
INSERT INTO trofeis (nome, quantidade, ano, img)
VALUES (:nome, :quantidade, :ano, :img);
";

// 3. Conectar com o banco

require("conectar_com_banco.php");

// 4. Prepared Statement
// pré-compilamos o SQL antes de enviar ao banco

$stmt = $conn->prepare($sql);

// 5. Passamos os valores antes de executar o comando

$stmt->bindValue(':nome', $nome);
$stmt->bindValue(':quantidade', $quantidade);
$stmt->bindValue(':ano', $ano);
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
require "trofeis.php";
?>