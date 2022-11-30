<?php
    include_once('../connect.php');
    include_once('vvar.php');

    $visita_selecionado = $_GET['id'];
    //$id_visita = $_POST['id_usuario'];

$sql = "UPDATE visitas SET 
            fk_assistente ='$visitante',
            fk_membro = '$membro',
            data_visita = '$data_visita',
            hora_visita = '$hora_visita',
            observacao_visita = '$observacao_visita', 
            descricao_visita = '$descricao_visita'
        WHERE id_visita = $visita_selecionada; ";

    if ($conn->query($sql) === TRUE) {
        echo "Uptdate successfully <br>";
        echo $sql;

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);


?>  

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Digital - Editar</title>
</head>
<body>
    <a href="/pi353socialdigital/src/admin/visitas/vRead.php">Ver registros</a>
</body>
</html>