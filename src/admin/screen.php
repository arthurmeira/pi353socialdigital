<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Digital - Admin</title>
</head>
<body>
    <h1>Social Digital - Admin</h1>

    <main>
        <div id="mid">
            <fieldset>
                <form method="POST" action="create.php">
                    <label for="name_user">Nome</label><br>
                    <input type="text" name="nome_user" id="userName" required><br><br>

                    <label for="email">E-mail</label><br>
                    <input type="email" name="email_user" id="userEmail" required><br><br>

                    <label for="cpf_user">CPF</label><br>
                    <input type="text" name="cpf_user" id="userCpf" required><br><br>

                    <label for="rg_user">RG</label><br>
                    <input type="text" name="rg_user" id="userRg" required><br><br>

                    <label for="cpf_user">Celular</label><br>
                    <input type="tel" name="cel_user" id="userCel" required><br><br>

                    <label for="rg_user">Estado (UF)</label><br>
                    <select id="UF" name="UF">
                        <option value="">Selecione</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MS">MS</option>
                        <option value="MT">MT</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                    </select><br><br>

                    <label for="cidade_user">Cidade</label><br>
                    <input type="cid" name="cidade_cidade" id="cidade_cidade" required><br><br>

                    <label for="bairro_user">Bairro</label><br>
                    <input type="bairro" name="bairro_user" id="userBairro" required><br><br>

                    <label for="end_user">Endereço</label><br>
                    <input type="end" name="end_user" id="userEnd" required><br><br>

                    <label for="rg_user">Data Nascimento</label><br>
                    <input type="date" name="dtNasc_user" id="userDtNasc" required><br><br>

                    <label for="rg_user">Data Cadastro</label><br>
                    <input type="date" name="dtCad_user" id="userDtCad" required><br><br>

<!--
                    <label for="cpf_user">Sexo:</label><br><br>

                    <label for="masc" checked>M</label>
                    <input type="radio" name="masc_user" id="userMasc" required><br>

                    <label for="masc">F</label>
                    <input type="radio" name="fem_user" id="userFem" required><br><br>

                    <label for="tipo_user">Tipo usuário:</label><br><br>

                    <label for="admin" checked>Admin</label>z   
                    <input type="radio" name="admin_user" id="userAdmin" value="A"><br>

                    <label for="comum">Comum</label>
                    <input type="radio" name="comum_user" id="userComum" value="C"><br><br>
-->

                    <input type="submit" name="sbmt" value="Cadastrar" link="create.php">

                </form>
            </fieldset>
        </div><!--mid-->
    </main>
</body>
</html>