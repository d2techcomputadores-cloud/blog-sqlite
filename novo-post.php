<?php
// 1. Receber dados do formulário

$titulo = $_POST['posts_titulo'];
$texto = $_POST['posts_texto'];
$autor = $_POST['posts_autor'];
$data = $_POST['posts_data'];
$img = $_POST['posts_img'];

// 2. Montar instrução SQL (INSERT)

$sql = "
INSERT INTO posts (titulo, texto, autor, data, img)
VALUES (:titulo, :texto, :autor, :data, :img);
";

// 3. Conectar com o banco
require("conectar_com_banco.php");

// 4. Prepared Statement
// pré-compilamos o SQL antes de enviar ao banco

$stmt = $conn->prepare($sql);

// 5. Passamos os valores antes de executar o comando

$stmt->bindValue(':titulo', $titulo);
$stmt->bindValue(':texto', $texto);
$stmt->bindValue(':autor', $autor);
$stmt->bindValue(':data', $data);
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
require "index.php";
?>