<?php
    include_once("bd.php");

    if (isset($_GET['idItemEditado']) == false) {
        header('Location: index.php');
    }
    
    if (isset($_GET['descricao']) == false) {
        header('Location: index.php');
    }

    if (isset($_GET['valor']) == false) {
        header('Location: index.php');
    }

    $idItemEditado = $_GET['idItemEditado'];
    $numeroSerie   = $_GET['numeroSerie'];   // Not is required
    $descricao     = $_GET['descricao'];
    $valor         = $_GET['valor'];

    atualizarItem($idItemEditado, $numeroSerie, $descricao, $valor);

    header('Location: index.php');
?>