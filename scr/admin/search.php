<?php
    include_once('connect.php');  
    include_once('read.php');  
    $id = $_GET["id"]; 
    $sql = "SELECT * FROM usuarios WHERE id = $id";

?>