<?php
    include_once("bd.php");

    if (isset($_GET['idItemEditado']) == false ){
        header('Location: index.php');
    }

    $idItemEditado = $_GET['idItemEditado'];
    $codigo        = $_GET['codigo'];
    $numeroSerie   = $_GET['numeroSerie'];
    $descricao     = $_GET['descricao'];
    $valor         = $_GET['valor'];

    $resultado = atualizarItem($idItemEditado, $codigo, $numeroSerie, $descricao, $valor);
    header('Location: index.php');
?>