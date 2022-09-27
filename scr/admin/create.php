<?php
    include_once('connect.php');

    $name_user = $_POST['nome_user'];
    $cpf_user = $_POST['cpf_user'];
    $rg_user = $_POST['rg_user'];
    $email_user = $_POST['email_user'];
    $celular_user = $_POST['cel_user'];
    $dtNasc_user = $_POST['dtNasc_user'];
    $dtCad_user = $_POST['dtCad_user'];
    //$tipo_user = $_POST['tipo_user'];
    //$fkEndereco_user = $_POST['email_user'];


$sql = "INSERT INTO `usuarios`(
            `id_usuario`, 
            `nome_usuario`, 
            `cpf_usuario`, 
            `rg_usuario`, 
            `email_usuario`, 
            `celular_usuario`, 
            `dtNasc_usuario`, 
            `dtCad_usuario`, 
            `tipo_usuario`, 
            `fk_endereco`
            ) 
        VALUES(    
            $name_user,
            $cpf_user,
            $rg_user,
            $email_user,
            $celular_user,
            $dtNasc_user,
            $dtCad_user
            )";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully <br>";
        echo $sql;
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);
?>  