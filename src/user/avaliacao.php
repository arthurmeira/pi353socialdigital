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

    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary ">
        <a class="navbar-brand" href="#">Social Digital</a>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link " href="/pi353socialdigital/src/user/home.php">Home</a>
                </li>
                <li>
                    <a class="nav-link active" href="/pi353socialdigital/src/user/avaliacao.php">Avaliação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pi353socialdigital/src/user/contato.php">Contato</a>
                </li>
                <li>
                    <a class="nav-link " href="/pi353socialdigital/src/user/perfil.php">Perfil</a>
                </li>
            </ul>
        </div>
    </nav>

    <br><br>

    <div class="container">
        <div class="card">
            <form action="/pi353socialdigital/src/user/avaliacao.php" method="POST">
                <table class="table table-striped">
                    <thead class="thead-Primary">
                        <ul class="list-group">
                            <h4 class="list-group-item active">Avaliação</h4>
                            <li class="list-group-item">Suspendisse potenti. Phasellus scelerisque magna id nulla venenatis, sed scelerisque velit pharetra. Vivamus lacus elit, tincidunt ut risus ut, venenatis facilisis urna.
                                <select class="form-control-sm btn-outline-primary" name="anota" id="anota" style="float: right;">
                                    <option value="Nota">Nota</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </li>
                            <li class="list-group-item">Suspendisse potenti. Phasellus scelerisque magna id nulla venenatis, sed scelerisque velit pharetra. Vivamus lacus elit, tincidunt ut risus ut, venenatis facilisis urna.
                                <select class="form-control-sm btn-outline-primary" name="bnota" id="bnota" style="float: right;">
                                    <option value="Nota">Nota</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </li>
                            <li class="list-group-item">Suspendisse potenti. Phasellus scelerisque magna id nulla venenatis, sed scelerisque velit pharetra. Vivamus lacus elit, tincidunt ut risus ut, venenatis facilisis urna.
                                <select class="form-control-sm btn-outline-primary" name="cnota" id="cnota" style="float: right;">
                                    <option value="Nota">Nota</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </li>
                            <li class="list-group-item">Suspendisse potenti. Phasellus scelerisque magna id nulla venenatis, sed scelerisque velit pharetra. Vivamus lacus elit, tincidunt ut risus ut, venenatis facilisis urna.
                                <select class="form-control-sm btn-outline-primary" name="dnota" id="dnota" style="float: right;">
                                    <option value="Nota">Nota</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </li>
                            <li class="list-group-item">Suspendisse potenti. Phasellus scelerisque magna id nulla venenatis, sed scelerisque velit pharetra. Vivamus lacus elit, tincidunt ut risus ut, venenatis facilisis urna.
                                <select class="form-control-sm btn-outline-primary" name="enota" id="enota" style="float: right;">
                                    <option value="Nota">Nota</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </li>
                            <li class="list-group-item">
                                <input class="btn btn-primary d-flex justify-content-center align-items-center form-group col-md-4" style="margin: auto;" type="submit" name="sbmt" id="sbmt" value="Enviar">
                            </li>
                        </ul>
                    </thead>
                </table>
            </form>
        </div>
    </div>


    <?php
    include_once("/xampp/htdocs/pi353socialdigital/src/admin/connect.php");

    error_reporting(0);

    $nota_a = $_POST['anota'];
    $nota_b = $_POST['bnota'];
    $nota_c = $_POST['cnota'];
    $nota_d = $_POST['dnota'];
    $nota_e = $_POST['enota'];
    $submit = $_POST['sbmt'];

    //$id_user = $_POST['id_user'];
    //$name_user = $_POST['nome_user'];

    if (($nota_a == 'Nota') or ($nota_b == 'Nota') or ($nota_c == 'Nota') or ($nota_b == 'Nota') or ($nota_e == 'Nota')) {
        echo "Selecione uma nota para cada pergunta.";
        exit;
    }

    $media = ($nota_a + $nota_b + $nota_c + $nota_d + $nota_e) / 5;

    $sql = "INSERT INTO avaliacao(media_user) VALUES ($media)";

    echo "<br><br>";

    if ($conn->query($sql) === TRUE) {
        echo "Avaliação realizada com sucesso. Média gerada $sql.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);

    ?>



    </main>
</body>

</html>