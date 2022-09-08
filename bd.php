<?php

    function obterConexao() {
        return mysqli_connect("localhost", "root", "", "inventory");
    }

    function pesquisarListaItens() {
        $conexao = obterConexao();

        $comandoSQL = "SELECT * FROM ATIVO ORDER BY CODIGO;";
        $query = mysqli_query($conexao, $comandoSQL);

        return mysqli_fetch_all($query, MYSQLI_ASSOC);
    }

    function pesquisarItem($idItem) {
        $conexao = obterConexao();

        $comandoSQL = "SELECT * FROM ATIVO WHERE ID = ?;";
        $stmt = mysqli_prepare($conexao, $comandoSQL);
        mysqli_stmt_bind_param($stmt, "i", $idItem);
        mysqli_stmt_execute($stmt);

        return mysqli_stmt_get_result($stmt);
    }

    function getMaiorCodigo() {
        $conexao = obterConexao();

        $comandoSQL = "SELECT MAX(CODIGO) + 1 FROM ATIVO;";
        $query = mysqli_query($conexao, $comandoSQL);
        $resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
        
        foreach ($resultado as $result) {
            return $result;
        }
    }

    function getSomaTotal() {
        $conexao = obterConexao();

        $comandoSQL = "SELECT SUM(VALOR) FROM ATIVO;";
        $query = mysqli_query($conexao, $comandoSQL);
        $resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
        
        foreach ($resultado as $result) {
            return $result;
        }
    }

    function excluirItem($idItem) {
        $conexao = obterConexao();

        $comandoSQL = "DELETE FROM ATIVO WHERE ID = ?;";
        $stmt = mysqli_prepare($conexao, $comandoSQL);
        mysqli_stmt_bind_param($stmt, "i", $idItem);
        mysqli_stmt_execute($stmt);

        return mysqli_stmt_get_result($stmt);
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
        
        return mysqli_stmt_get_result($stmt);
    }

    function cadastrarItem($codigo, $numeroSerie, $descricao, $valor) {
        $conexao = obterConexao();

        $comandoSQL = "INSERT INTO ATIVO (CODIGO, NUMERO_SERIE, DESCRICAO, VALOR) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_prepare($conexao, $comandoSQL);
        mysqli_stmt_bind_param($stmt, "issi", $codigo, $numeroSerie, $descricao, $valor);
        mysqli_stmt_execute($stmt);
        
        return mysqli_stmt_get_result($stmt);
    }
    
?>