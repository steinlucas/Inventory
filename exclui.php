<?php
    include_once("bd.php");

    if (isset($_GET['idItem']) == false) {
        header('Location: index.php');
    }
    
    excluirItem($_GET['idItem']);
    
    header('Location: index.php');
?>