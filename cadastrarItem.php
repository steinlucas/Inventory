<?php
    include_once("bd.php");
    include_once("cabecalho.php")
?>

<h1>Cadastrar item</h1><br>
<form method="GET" action="cadastra.php">
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