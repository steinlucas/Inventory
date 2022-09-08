<?php

    function obterConexao() {
        $conexao = mysqli_connect("localhost", "root", "", "inventory");

        return $conexao;
    }

    function pesquisarListaItens() {
        $conexao = obterConexao();

        $comandoSQL = "SELECT * FROM ATIVO ORDER BY CODIGO;";
        $query = mysqli_query($conexao, $comandoSQL);
        $resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);

        return $resultado;
    }

    function pesquisarItem($idItem) {
        $conexao = obterConexao();

        $comandoSQL = "SELECT * FROM ATIVO WHERE ID = ?;";
        $stmt = mysqli_prepare($conexao, $comandoSQL);
        mysqli_stmt_bind_param($stmt, "i", $idItem);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        return $resultado;
    }

    function excluirItem($idItem) {
        $conexao = obterConexao();

        $comandoSQL = "DELETE FROM ATIVO WHERE ID = ?;";
        $stmt = mysqli_prepare($conexao, $comandoSQL);
        mysqli_stmt_bind_param($stmt, "i", $idItem);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);
                
        return $resultado;
    }

    function atualizarItem($idItemEditado, $codigo, $numeroSerie, $descricao, $valor) {
        $conexao = obterConexao();

        $comandoSQL = "UPDATE ATIVO
                          SET CODIGO = ?,
                              NUMERO_SERIE = ?,
                              DESCRICAO = ?,
                              VALOR = ?
                        WHERE ID = ?;";
        $stmt = mysqli_prepare($conexao, $comandoSQL);
        mysqli_stmt_bind_param($stmt, "issii", $codigo, $numeroSerie, $descricao, $valor, $idItemEditado);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        return $resultado;
    }

    function cadastrarItem($codigo, $numeroSerie, $descricao, $valor) {
        $conexao = obterConexao();

        $comandoSQL = "INSERT INTO ATIVO (CODIGO, NUMERO_SERIE, DESCRICAO, VALOR) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_prepare($conexao, $comandoSQL);
        mysqli_stmt_bind_param($stmt, "issi", $codigo, $numeroSerie, $descricao, $valor);
        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);

        return $resultado;
    }
    
?>