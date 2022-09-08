<?php
    include_once("bd.php");
    $listaItens = pesquisarItem($_GET['idItem']);

    include_once("cabecalho.php")
?>
    <h1>Atualizar item</h1><br>
    <form method="GET" action="atualiza.php">

    <?php
        foreach($listaItens as $umItem) {
    ?>
        <div class="form-group">
            <input type="hidden" class="form-control" id="idItemEditado" name="idItemEditado" value="<?php echo $umItem['ID'];?>">
        </div>

        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="number" class="form-control" id="codigo" name="codigo" value="<?php echo $umItem['CODIGO'];?>">
        </div><br>

        <div class="form-group">
            <label for="numeroSerie">Número de série</label>
            <input type="text" class="form-control" id="numeroSerie" name="numeroSerie" value="<?php echo $umItem['NUMERO_SERIE'];?>">
        </div><br>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" required class="form-control" id="descricao" name="descricao" value="<?php echo $umItem['DESCRICAO'];?>">
        </div><br>

        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="number" required class="form-control" id="valor" name="valor" value="<?php echo $umItem['VALOR'];?>">
        </div><br>
    <?php
        }
    ?>
        <a href="index.php" type="button" class="btn btn-outline-primary"><i class="material-icons">arrow_back</i></a>
        <input class="btn btn-success" type="submit" value="Atualizar">
    </form>
<?php include_once("rodape.php"); ?>