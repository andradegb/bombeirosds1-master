<?php
include("conecta.php");
$nome = $_POST["nome"];
$id = $_POST["id"];

if (isset($_POST['tipoDeletar'])) {
    $tipoDeletar = $_POST['tipoDeletar'];

    if ($tipoDeletar === 'N') {
        $nome = $_POST['nome'];
      
        $comando = $pdo->prepare("DELETE FROM cadastro WHERE nome = :nome");
        $comando->bindParam(':nome', $nome);
        $resultado = $comando->execute();
    } elseif ($tipoDeletar === 'I') {
        $id = $_POST['id'];
        
        $comando = $pdo->prepare("DELETE FROM cadastro WHERE id = :id");
        $comando->bindParam(':id', $id);
        $resultado = $comando->execute();
    }
}
?>
