<?php
    include_once('connect.php');    
    echo "Delete screen";

    $result = mysqli_query($mysqli, "DELETE FROM usuarios WHERE id=$id_usuario");

    header("Location:read.php");
?>