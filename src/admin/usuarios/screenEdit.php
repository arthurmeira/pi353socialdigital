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
        include_once("connect.php");
    ?>

    <form method="POST" action="/pi353socialdigital/src/admin/usuarios/edit.php" style="width: 60%; margin: auto;">
        <input type="hidden" id="id_user" name="id_user">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nome</label>
                <input class="form-control" type="text" name="nome_user" id="userName" placeholder="Nome" required
                    <?php
                        $select = mysqli_query($conn, "SELECT nome_usuario FROM usuarios where id_usuario = 18");

                        while ($row = mysqli_fetch_array($select)) {
                            echo '<input value="' . $row['nome_usuario'] . '">' . '</input>';
                        }
                    ?>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Email</label>
                  <input class="form-control" name="email_user" id="userEmail" placeholder="Email" required
                  <?php
                        $select = mysqli_query($conn, "SELECT email_usuario FROM usuarios where id_usuario = 18");

                        while ($row = mysqli_fetch_array($select)) {
                            echo '<input value="' . $row['email_usuario'] . '">' . '</input>';
                        }
                    ?>
                  
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="tipo_usuario">Tipo de Usuário</label>
                <select id="tipo_usuario" name="tipo_usuario" class="form-control">
                    <?php
                    $results = mysqli_query($conn, "SELECT * FROM tipo_usuario");

                    while ($row = mysqli_fetch_array($results)) {
                        echo '<option value="' . $row['id_tipo'] . '">' . $row['nome_tipo'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="inputAddress">CPF</label>
                <input type="text" class="form-control" name="cpf_user" id="userCpf" placeholder="CPF" maxlength="11" required
                <?php
                        $select = mysqli_query($conn, "SELECT cpf_usuario FROM usuarios where id_usuario = 18");

                        while ($row = mysqli_fetch_array($select)) {
                            echo '<input value="' . $row['cpf_usuario'] . '">' . '</input>';
                        }
                    ?>
                
            </div>
            <div class="form-group col-md-3">
                <label for="inputAddress2">RG</label>
                <input type="text" class="form-control" name="rg_user" id="userRg" placeholder="RG" maxlength="7" required

                <?php
                        $select = mysqli_query($conn, "SELECT rg_usuario FROM usuarios where id_usuario = 18");

                        while ($row = mysqli_fetch_array($select)) {
                            echo '<input value="' . $row['rg_usuario'] . '">' . '</input>';
                        }
                    ?>
            </div>

            <div class="form-group col-md-2">
                    <label for="inputPassword4">Nascimento</label>
                    <input class="form-control" type="date" name="dtNasc_user" id="userDtNasc" required

                    <?php
                        $select = mysqli_query($conn, "SELECT * FROM usuarios where id_usuario = 18");

                        while ($row = mysqli_fetch_array($select)) {
                            echo '<input value="' . $row['dtNasc_usuario'] . '">' . '</input>';
                        }
                    ?>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputPassword4">Cadastro</label>
                    <input class="form-control" type="date" name="dtCad_user" id="userDtCad" required
                    <?php
                        $select = mysqli_query($conn, "SELECT * FROM usuarios where id_usuario = 18");

                        while ($row = mysqli_fetch_array($select)) {
                            echo '<input value="' . $row['dtCad_usuario'] . '">' . '</input>';
                        }
                    ?>
                </div>
        </div>

        
        <form method="get" action=".">
        
        
        <div class="form-row">
        
        <div class="form-group col-md-3">
                <label>CEP</label>
                <input placeholder="CEP" class="form-control" name="cep" type="text" id="cep" value="" size="10" maxlength="9" onchange="pesquisacep(this.value);" />
            </div>

            <div class="form-group col-md-1">
                    <label>Estado</label>
                    <select class="form-control" name="estado_user" type="text" placeholder="UF" required id="uf" name="" id="">
                        <?php
                        include_once("../connect.php");
                        $results = mysqli_query($conn, "SELECT * FROM estados");

                        while ($row = mysqli_fetch_array($results)) {
                            echo '<option value="' . $row['id_estado'] . '">' . $row['uf_estado'] . '</option>';
                        }
                    ?>
                    </select>
                    
                </div>
                
            
                <div class="form-group col-md-8">
                    <label>Cidade</label>
                    <input class="form-control" name="cidade_user" id="cidade" placeholder="Cidade" required id="cidade" size="40" 
                    <?php
                        $select = mysqli_query($conn, "SELECT nome_usuario FROM usuarios where id_usuario = 18");

                        while ($row = mysqli_fetch_array($select)) {
                            echo '<input value="' . $row['nome_usuario'] . '">' . '</input>';
                        }
                    ?>
                </div>

                <div class="form-group col-md-6">
                    <label>Bairro</label>
                    <input class="form-control" name="bairro_user" type="text" placeholder="Bairro" required id="bairro" size="40" 
                    <?php
                        $select = mysqli_query($conn, "SELECT nome_usuario FROM usuarios where id_usuario = 18");

                        while ($row = mysqli_fetch_array($select)) {
                            echo '<input value="' . $row['nome_usuario'] . '">' . '</input>';
                        }
                    ?>
                </div>

                <div class="form-group col-md-6">
                    <label>Rua</label>
                    <input class="form-control" name="rua_user" type="text" placeholder="Rua" required id="rua" size="60" 

                    
                </div>
            </div>
            <button type="submit" name="sbmt" class="btn btn-primary col-md-12">Atualizar</button>
        </form>
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
