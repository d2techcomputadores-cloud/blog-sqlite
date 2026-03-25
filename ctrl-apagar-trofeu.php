<?php
$id_trofeu = $_GET['id'];

require("conectar_com_banco.php");

$sql = "
DELETE FROM trofeis
WHERE trofeuId = :id_trofeu
";

$stmt = $conn->prepare($sql);

$stmt->bindValue(':id_trofeu', $id_trofeu);

$stmt->execute(); 

require "deletar-trofeu.php";
?>