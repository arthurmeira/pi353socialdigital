<?php
include_once('../connect.php');
include_once('vvar.php');

$visitante = $_POST['visitanteVi'];
$membro = $_POST['membroVi'];


$sql_visitas = "INSERT INTO visitas(
            local_visita,
            data_visita, 
            hora_visita, 
            observacao_visita, 
            descricao_visita
            ) 
        VALUES(    
            '$local_visita',
            '$data_visita',
            '$hora_visita',
            '$observacao_visita',
            '$descricao_visita'
            )";

if ($conn->query($sql_visitas) === TRUE) {
    $id_usuario = $conn->insert_id;
    echo "New record created successfully <br>";
    echo $sql_visitas;
} else {
    echo "Error: " . $sql_visitas . "<br>" . $conn->error;
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Digital - ADMIN</title>
</head>

<body>
    <a href="/pi353socialdigital/src/admin/visitas/vRead.php">Ver registros</a>
</body>

</html>