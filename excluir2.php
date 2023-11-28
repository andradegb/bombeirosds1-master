<?php
    include("conecta1.php");
    $id_paciente = $_GET["nOocorrencia"];
        
        $comando = $pdo->prepare("DELETE FROM paciente WHERE nOcorrencia=?");
        $comando->execute([$nOcorrencia]);

    header("Location: pesquisar.php");
?>