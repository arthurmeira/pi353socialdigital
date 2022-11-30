<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Social Digital - Admin</title>
</head>
<?php
    include_once('../connect.php');

    $buscar = $_POST['buscar'];
    $submit = $_POST['sbmt'];

    if (isset($submit)) {
        $results1 = mysqli_query($conn, "SELECT * FROM visitas WHERE (id_visitas = $buscar)");
    } else if (empty($sql_busca)){
        echo "Nenhum registro encontrado.";
    }
    
    ?>
<body>
    
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Social Digital</a>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usuários
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/pi353socialdigital/src/admin/usuarios/screen.php">Novo usuário</a>
                        <a class="dropdown-item" href="/pi353socialdigital/src/admin/usuarios/read.php">Tabela de usuários</a>
                        <a class="dropdown-item" href="/pi353socialdigital/src/admin/usuarios/read.php">Relatório de usuário</a>
                    </div>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Visitas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/pi353socialdigital/src/admin/visitas/vScreen.php">Nova visita</a>
                        <a class="dropdown-item" href="/pi353socialdigital/src/admin/visitas/vRead.php">Tabela de visitas</a>
                        <a class="dropdown-item" href="/pi353socialdigital/src/admin/visitas/vRead.php">Relatório de visita</a>
                    </div>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contato
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Mensagens</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <br><br>

    <div class="container">
        <div class="card">

            <table class="table table-striped">
                <thead class="thead-Primary">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Assistente</th>
                        <th scope="col">Membro</th>
                        <th scope="col">Local</th>
                        <th scope="col">Data</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = mysqli_fetch_array($results1)) { 
                            $id_visita = $row['id_visitas'];
                            $assistente = $row['fk_assistente'];
                            $membro = $row['fk_membro'];
                            $local_visita = $row['local_visita'];
                            $data_visita = $row['data_visita'];
                            $hora_visita = $row['hora_visita'];
                        ?>
                        <tr>
                            <td><?=$id_visita?></td>
                            <td><?=$assistente?></td>
                            <td><?=$membro?></td>
                            <td><?=$local_visita?></td>
                            <td><?=$data_visita?></td>
                            <td><?=$hora_visita?></td>

                            <td>
                                <a name="edit" href="vScreenEdit.php?id=<?= $id_visita ?>" class="edit_btn"><img src="/pi353socialdigital/IMAGES/editar.png" alt="edit"></a>
                                <a name="del" href="view.php?id=<?= $id_visita ?>"  class="view_btn"><img src="/pi353socialdigital/IMAGES/impressao.png" alt="view"></a>
                                <a name="del" href="vDelete.php?id=<?= $id_visita ?>"  class="del_btn"><img src="/pi353socialdigital/IMAGES/lixo.png" alt="trash"></a>
                            </td>
                        </tr>
                    <?php } ?>
                    
                </tbody>
            </table>

        </div>
        <!--card-->
    </div>
    <!--container-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>