<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Social Digital</title>
</head>

<body>

    <?php
    //Chamando todos os arquivos necessários 
    include_once("../admin/connect.php");
    $results = mysqli_query($conn, "SELECT * FROM usuarios where id_usuario = 18");
    ?>

    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Social Digital</a>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link " href="/pi353socialdigital/src/user/home.php">Home</a>
                </li>
                <li>
                    <a class="nav-link " href="/pi353socialdigital/src/user/avaliacao.php">Avaliação</a>
                </li>
                <li>
                    <a class="nav-link active" href="/pi353socialdigital/src/user/perfil.php">Perfil</a>
                </li>
            </ul>
        </div>
    </nav>

    <br><br>

    <div class="container">



        <table class="table table-striped">
            <thead class="thead-Primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">RG</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Nascimento</th>
                    <th scope="col">Cadastro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($results)) {
                    $id_usuario = $row['id_usuario'];
                    $name_user = $row['nome_usuario'];
                    $cpf_user = $row['cpf_usuario'];
                    $rg_user = $row['rg_usuario'];
                    $email_user = $row['email_usuario'];
                    $dtNasc_user = $row['dtNasc_usuario'];
                    $dtCad_user = $row['dtCad_usuario'];
                ?>

                    <tr>
                        <td><?= $row['id_usuario']; ?></td>
                        <td><?= $row['nome_usuario']; ?></td>
                        <td><?= $row['cpf_usuario']; ?></td>
                        <td><?= $row['rg_usuario']; ?></td>
                        <td><?= $row['email_usuario']; ?></td>
                        <td><?= $row['dtNasc_usuario']; ?></td>
                        <td><?= $row['dtCad_usuario']; ?></td>

                    </tr>
                <?php } ?>

            </tbody>
        </table>

        </table>
    </div>
    <!--container-->

    <form>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>