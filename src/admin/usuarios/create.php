<?php
include_once('../connect.php');
include_once('var.php');

// Cadastro de Estado
$sql_estado = "INSERT INTO estados(
            uf_estado
            ) 
        VALUES(    
            '$estado_user'
            )";
            
/*
        if ($conn->query($sql_estado) === TRUE) {
            $query = $conn->query($sql_estado);
            $id_estado = $query->insert_id;
            echo "New record created successfully <br>";
            echo $sql_estado;
            
        } else {
            echo "Error: " . $sql_estado . "<br>" . $conn->error;
        }
        #mysqli_insert_id;
        mysqli_close($conn);
        */


if ($conn->query($sql_estado) === TRUE) {
    echo "New record created successfully <br>";
    echo $sql_estado;
} else {
    echo "Error: " . $sql_estado . "<br>" . $conn->error;
}

$id_estado = mysqli_query($conn, "SELECT id_estado FROM estados");

$fk_estado = $_POST['estado_user'];
$fk_cidade = $_POST['cidade_user'];

// Cadastro de Cidade
$sql_cidade = "INSERT INTO cidades(
            nome_cidade,
            fk_estado
            ) 
        VALUES(    
            '$cidade_user',
            '$fk_estado'
            )"; 


if ($conn->query($sql_cidade) === TRUE) {
    $query = $conn->query($sql_cidade);
    $fk_cidade = $conn->insert_id;
    echo "New record created successfully <br>";
    echo $sql_cidade;
    
} else {
    echo "Error: " . $sql_cidade . "<br>" . $conn->error;
}
    #mysqli_insert_id



// Cadastro de Bairro
$sql_bairro = "INSERT INTO bairros(
            nome_bairro,
            fk_cidade
            ) 
        VALUES(    
            '$bairro_user',
            '$fk_cidade'
            )";

if ($conn->query($sql_bairro) === TRUE) {
    $query = $conn->query($sql_bairro);
    $fk_bairro = $conn->insert_id;
    echo "New record created successfully <br>";
    echo $sql_bairro;
    
} else {
    echo "Error: " . $sql_bairro . "<br>" . $conn->error;
}

$fk_endereco = $_POST['rua_user'];

// Cadastro de Endereço
$sql_endereco = "INSERT INTO endereco(
            nome_rua,
            fk_bairro
            ) 
        VALUES(    
            '$rua_user',
            '$fk_bairro'
            )";

if ($conn->query($sql_endereco) === TRUE) {
    $query = $conn->query($sql_endereco);
    $fk_endereco = $conn->insert_id;
    echo "New record created successfully <br>";
    echo $sql_endereco;
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cadastro Usuário
$sql = "INSERT INTO usuarios(
            nome_usuario, 
            cpf_usuario, 
            rg_usuario, 
            email_usuario,  
            dtNasc_usuario, 
            dtCad_usuario,
            fk_endereco
            ) 
        VALUES(    
            '$name_user',
            '$cpf_user',
            '$rg_user',
            '$email_user',
            '$dtNasc_user',
            '$dtCad_user',
            '$fk_endereco'
            )";

if ($conn->query($sql) === TRUE) {
    $id_endereco = $conn->insert_id;
    echo "New record created successfully <br>";
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
    <title>Social Digital - ADMIN</title>
</head>

<body>
    <a href="read.php">Ver registros</a>
</body>

</html>