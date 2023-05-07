<?php
    include_once("bd.php");

    if (isset($_GET['descricao']) == false ) {
        header('Location: index.php');
    }
    
    if (isset($_GET['valor']) == false ) {
        header('Location: index.php');
    }

    $numeroSerie = $_GET['numeroSerie']; // Not is required.
    $descricao   = $_GET['descricao'];
    $valor       = $_GET['valor'];
    
    cadastrarItem($numeroSerie, $descricao, $valor);
    
    header('Location: index.php');
?>