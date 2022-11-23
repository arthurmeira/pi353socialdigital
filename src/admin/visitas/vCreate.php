<?php
    include_once('../connect.php');
    include_once('vvar.php');

$sql_visitas = "INSERT INTO visitas(
            visitanteVi,
            data_visita, 
            hora_visita, 
            local_visita, 
            observacao_visita, 
            descricao_visita
            ) 
        VALUES(    
            '$visitante_visita',
            '$data_visita',
            '$hora_visita',
            '$local_visita',
            '$observacao_visita',
            '$descricao_visita'
            )";

    if ($conn->query($sql_visitas) === TRUE) {
        $query = $conn->query($sql_visitas);
        $fk_cidade = $conn->insert_id;
        echo "New record created successfully <br>";
        echo $sql_visitas;
        
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
    <title>Social Digital - ADMIN</title>
</head>
<body>
    <a href="/pi353socialdigital/src/admin/visitas/vRead.php">Ver registros</a>
</body>
</html>