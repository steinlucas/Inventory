<?php
    include_once("bd.php");

    if (isset($_GET['codigo']) == false ){
        header('Location: index.php');
    }

    $codigo = $_GET['codigo'];
    $numeroSerie = $_GET['numeroSerie'];
    $descricao = $_GET['descricao'];
    $valor = $_GET['valor'];
    
    $resul = cadastrarItem($codigo, $numeroSerie, $descricao, $valor);
    header('Location: index.php');
?>