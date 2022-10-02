<?php
    include_once('connect.php');   
    $id = $_GET["id"]; 

    $sql = "DELETE FROM usuarios WHERE id_usuario = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Delete successfully <br>";
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
    <title>Social Digital - Deletar</title>
</head>
<body>
    <a href="/pi353socialdigital/scr/admin/read.php">Ver registros</a>
</body>
</html>