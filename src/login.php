<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
          crossorigin="anonymous">    
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Social Digital</a>
    </nav>

    <br><br>
    
<form method="POST" action="login.php" style="width: 40%; margin: auto; border:2px solid royalblue; border-radius:10px; background-color:#EEEEEE; padding: 20px;" >
            
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">E-mail</label>
                <input type="email" class="form-control" name="email_login" id="email_login" placeholder="E-mail" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Senha</label>
                  <input type="password" class="form-control" name="senha_login" id="senha_login" placeholder="Senha" maxlength="8" required>
            </div>
        </div>
  
        <button type="submit" name="entrar" class="btn btn-primary col-md-12">Entrar</button>
</form>

<?php

    include_once('admin/connect.php');

    $sql_verifica = ("SELECT * FROM usuarios WHERE id_usuario = 22");
    echo $sql_verifica;

?>

</body>
</html>