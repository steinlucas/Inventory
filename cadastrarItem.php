<?php
    include_once("bd.php");
    $maiorCodigo = getMaiorCodigo();

    include_once("cabecalho.php")
?>
    <h1>Cadastrar item</h1><br>
        <form method="GET" action="cadastra.php">
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="number" required class="form-control" id="codigo" name="codigo" value="<?php 
                    foreach($maiorCodigo as $resultado) {
                        if ($resultado != "") { // Se não tem registros no banco, tava imprimindo sem valor no front-end.
                            echo $resultado;
                        } else {
                            echo 1;
                        }
                    }
                ?>">
            </div><br>

            <div class="form-group">
                <label for="numeroSerie">Código de série</label>
                <input type="text" class="form-control" id="numeroSerie" name="numeroSerie">
            </div><br>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" required class="form-control" id="descricao" name="descricao">
            </div><br>

            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="number" required class="form-control" id="valor" name="valor">
            </div><br>
            
            <a href="index.php" type="button" class="btn btn-outline-primary"><i class="material-icons">arrow_back</i></a>
            <input class="btn btn-success" type="submit" value="Cadastrar">
        </form>
<?php include_once("rodape.php"); ?>