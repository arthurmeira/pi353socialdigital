<?php
    include_once('connect.php');
    include_once('var.php');

    $result = mysqli_query($mysqli, "DELETE FROM usuarios WHERE id=$id_usuario");

    header("Location:index.php");
?>