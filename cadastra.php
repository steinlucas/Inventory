<?php
    include_once("bd.php");

    if (isset($_GET['descricao']) == false ) {
        header('Location: index.php');
    }
    
    if (isset($_GET['valor']) == false ) {
        header('Location: index.php');
    }

    $codigo      = $_GET['codigo'];      // Not is required.
    $numeroSerie = $_GET['numeroSerie']; // Not is required.
    $descricao   = $_GET['descricao'];
    $valor       = $_GET['valor'];
    
    cadastrarItem($codigo, $numeroSerie, $descricao, $valor);
    
    header('Location: index.php');
?>