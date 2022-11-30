<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Social Digital - Admin</title>
</head>

<body>

    <br><br>

    <?php
        include_once('../connect.php');

        $usuario_selecionado = $_GET['id'];

        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE id_usuario = $usuario_selecionado");
        $row = mysqli_fetch_array($sql);
    ?>

    <div class="container">
        <div style="display:flex; align-items:center; justify-content:space-between">
            <h2>Relatório</h2>
            <a href="read.php" style="margin-bottom: 10px;" class="btn btn-outline-primary">Voltar</a>
        </div>
        <div class="card" style="padding: 20px; display:flex;">
            <h4>
                <div>Nome: <?=$row['nome_usuario']?></div><hr>
                <div>E-mail: <?=$row['email_usuario']?></div><hr>
                <div>CPF: <?=$row['cpf_usuario']?></div><hr>
                <div>RG: <?=$row['rg_usuario']?></div><hr>
                <div>Cadastro: <?=$row['dtCad_usuario']?></div><hr>
                <div>Nascimento: <?=$row['dtNasc_usuario']?></div><hr>
                <div>Tipo: <?=$row['fk_tipo']?></div><hr>
            </h4>
            <a style="margin: 10px; color:white;" onclick="window.print()" class="btn btn-primary">Imprimir</a>
        </div>
    </div>

    

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
