<?php
    include_once("bd.php");

    if (isset($_GET['idItem']) == false ){
        header('Location: index.php');
    }

    $idItem = $_GET['idItem'];
    
    $resultado = excluirItem($idItem);
    header('Location: index.php');
?>