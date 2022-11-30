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

    <?php
        include_once("../connect.php");

        $visita_selecionada = $_GET['id'];

        $select = mysqli_query($conn, "SELECT * FROM visitas where id_visitas = $visita_selecionada");
        $row = mysqli_fetch_array($select);
    ?>

    <form method="POST" action="/pi353socialdigital/src/admin/visitas/vedit.php" style="width: 60%; margin: auto;">

        <div class="form-row">

            <div class="form-group col-md-4">
                <label for="inputEstado">Assistente social</label>

                <select id="visitanteVi" name="visitanteVi" class="form-control">
                    <?php
                        include_once("../connect.php");
                        $results1 = mysqli_query($conn, "SELECT * FROM usuarios where fk_tipo = $visita_selecionada");

                        echo '<option value="'.$row['id_visitas'].'">'.$row['nome_usuario'].'</option>';
                    ?>
                </select>

            </div>

            <div class="form-group col-md-4">
                <label for="inputEstado">Membro</label>

                <select id="visitanteVi" name="membroVi" class="form-control">
                    <?php
                        include_once("../connect.php");
                        $results2 = mysqli_query($conn, "SELECT * FROM usuarios where fk_tipo = $visita_selecionada");

                        echo '<option value="'.$row['id_visitas'].'">'.$row['nome_usuario'].'</option>';
                    ?>
                </select>
            </div>

            <div class="form-group col-md-2">
                <label for="inputPassword4">Data</label>
                <input class="form-control" type="date" name="dataVi" id="dataVi" required value="<?=$row['data_visita']?>" />
            </div>
            <div class="form-group col-md-2">
                <label for="inputPassword4">Hora</label>
                <input class="form-control" type="time" name="horaVi" id="horaVi" required value="<?=$row['hora_visita']?>" />
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputAddress">Observações</label>
                <textarea class="form-control" name="obsVi" id="obsVi" cols="30" rows="10" required>
                <?=$row['observacao_visita']?>
                </textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Descrição</label>
                <textarea class="form-control" name="descVi" id="descVi" cols="30" rows="10" required>
                <?=$row['descricao_visita']?>
                </textarea>
            </div>
        </div>

        
        <button type="submit" name="sbmt" class="btn btn-primary col-md-12">Atualizar</button>

    </form>


    <br><br>

    <!-- Adicionando Javascript -->
    <script>
        function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value = ("");
            document.getElementById('bairro').value = ("");
            document.getElementById('cidade').value = ("");
            document.getElementById('uf').value = ("");
            document.getElementById('ibge').value = ("");
        }

        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('rua').value = (conteudo.logradouro);
                document.getElementById('bairro').value = (conteudo.bairro);
                document.getElementById('cidade').value = (conteudo.localidade);
                document.getElementById('uf').value = (conteudo.uf);
                document.getElementById('ibge').value = (conteudo.ibge);
            } //end if.
            else {
                //CEP não Encontrado.
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }

        function pesquisacep(valor) {

            //Nova variável "cep" somente com dígitos.
            var cep = valor.replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('rua').value = "...";
                    document.getElementById('bairro').value = "...";
                    document.getElementById('cidade').value = "...";
                    document.getElementById('uf').value = "...";
                    document.getElementById('ibge').value = "...";

                    //Cria um elemento javascript.
                    var script = document.createElement('script');

                    //Sincroniza com o callback.
                    script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);

                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        }
    </script>



    <!-- Inicio do formulario -->
    <form method="get" action=".">
        <input name="ibge" type="hidden" id="ibge" size="8" /></label><br />
    </form>
</body>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
