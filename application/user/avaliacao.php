<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Digital - Avaliação</title>
</head>

<body>
    <main>
        <h1>Social Digital - Avaliação</h1>
        <h4>Sistema de avaliação: 1 - Muito ruim; 2 - Ruim; 3 - Ok; 4 - Bom; 5 - Muito bom.</h4>

        <div class="Perguntas" style="border:2px solid royalblue; margin: 10px; padding: 10px;">
            <form action="/pi353socialdigital/src/user/avaliacao.php" method="POST">
                <div class="avaliacao-user">
                    <fieldset>
                        <p>Suspendisse potenti. Phasellus scelerisque magna id nulla venenatis, sed scelerisque velit pharetra. Vivamus lacus elit, tincidunt ut risus ut, venenatis facilisis urna.
                            <select name="anota" id="anota" style="float: right;">
                                <option value="Nota">Nota</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </p>
                    </fieldset>
                </div>
                <div class="avaliacao-user">
                    <fieldset>
                        <p>Suspendisse potenti. Phasellus scelerisque magna id nulla venenatis, sed scelerisque velit pharetra. Vivamus lacus elit, tincidunt ut risus ut, venenatis facilisis urna.
                            <select name="bnota" id="bnota" style="float: right;">
                                <option value="Nota">Nota</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </p>
                    </fieldset>
                </div>
                <div class="avaliacao-user">
                    <fieldset>
                        <p>Suspendisse potenti. Phasellus scelerisque magna id nulla venenatis, sed scelerisque velit pharetra. Vivamus lacus elit, tincidunt ut risus ut, venenatis facilisis urna.
                            <select name="cnota" id="cnota" style="float: right;">
                                <option value="Nota">Nota</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </p>
                    </fieldset>
                </div>
                <div class="avaliacao-user">
                    <fieldset>
                        <p>Suspendisse potenti. Phasellus scelerisque magna id nulla venenatis, sed scelerisque velit pharetra. Vivamus lacus elit, tincidunt ut risus ut, venenatis facilisis urna.
                            <select name="dnota" id="dnota" style="float: right;">
                                <option value="Nota">Nota</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </p>
                    </fieldset>
                </div>
                <div class="avaliacao-user">
                    <fieldset>
                        <p>Suspendisse potenti. Phasellus scelerisque magna id nulla venenatis, sed scelerisque velit pharetra. Vivamus lacus elit, tincidunt ut risus ut, venenatis facilisis urna.
                            <select name="enota" id="enota" style="float: right;">
                                <option value="Nota">Nota</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </p>
                    </fieldset><br>
                    <input style="color: green;" type="submit" name="sbmt" id="sbmt" value="Search">
                </div>
            </form>
            </fieldset>
        </div>
        <!--perguntas-->

        <?php
        include_once("/xampp/htdocs/pi353socialdigital/src/admin/connect.php");

        $nota_a = $_POST['anota'];
        $nota_b = $_POST['bnota'];
        $nota_c = $_POST['cnota'];
        $nota_d = $_POST['dnota'];
        $nota_e = $_POST['enota'];
        $submit = $_POST['sbmt'];

        $id_user = $_POST['id_user'];
        $name_user = $_POST['nome_user'];

        if (($nota_a == 'Nota') or ($nota_b == 'Nota') or ($nota_c == 'Nota') or ($nota_b == 'Nota') or ($nota_e == 'Nota')) {
            echo "Selecione uma nota para cada pergunta.";
            exit;
        }

        $media = ($nota_a + $nota_b + $nota_c + $nota_d + $nota_e) / 5;

        $sql = "INSERT INTO avaliacao(media_user) VALUES ($media)";

        echo "<br><br>";    

        if ($conn->query($sql) === TRUE) {
            echo "<br><br> New record created successfully <br>";
            echo $sql;
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        mysqli_close($conn);
    
        ?>



    </main>
</body>

</html>