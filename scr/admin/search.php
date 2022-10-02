<?php
include_once('connect.php');
include_once('read.php');

$buscar = $_POST['buscar'];
$tipo_busca = $_POST['tipo_busca'];

switch ($tipo_busca) {
    case 'id':
        $sql_busca = mysqli_query($conn, "SELECT * FROM usuarios WHERE id_usuario = $buscar");
        //func_buscar($sql_busca);
        break;
    case 'nome':
        $sql_busca = mysqli_query($conn, "SELECT * FROM usuarios WHERE nome_usuario = $buscar");
        //func_buscar($sql_busca);
        break;
    case 'nascimento':
        $sql_busca = mysqli_query($conn, "SELECT * FROM usuarios WHERE dtNasc_usuario = $buscar");
        //func_buscar($sql_busca);
        break;
    case 'cadastro':
        $sql_busca = mysqli_query($conn, "SELECT * FROM usuarios WHERE dtCad_usuario = $buscar");
        //func_buscar($sql_busca);
        break;
    default:
        echo "Opção inválida.";
}
mysqli_close($conn);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
        echo "Busca por $tipo_busca. <br>";

        if ($buscar == '') {
            echo "É necessário digitar algo para fazer uma busca. <br>";
        }

        while ($row = mysqli_fetch_array($sql_busca)) { ?>
        <tr>
            <td><?php echo $row['id_usuario']; ?></td>
            <td><?php echo $row['nome_usuario']; ?></td>
            <td><?php echo $row['cpf_usuario']; ?></td>
            <td><?php echo $row['rg_usuario']; ?></td>
            <td><?php echo $row['email_usuario']; ?></td>
            <td><?php echo $row['celular_usuario']; ?></td>
            <td><?php echo $row['dtNasc_usuario']; ?></td>
            <td><?php echo $row['dtCad_usuario']; ?></td>

            <td><a href="screenEdit.php?id=<?= $row['id_usuario']; ?>" class="edit_btn">Edit</a></td>
            <td><a href="delete.php?id=<?= $row['id_usuario']; ?>" class="del_btn">Delete</a></td>
        </tr>
    <?php } ?>

</body>

</html> 