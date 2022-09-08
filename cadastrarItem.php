<html>
    <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Inventory</title>
    </head>

    <body>
        <div class="container">
        <br><br><h1>Cadastro de item</h1>
        <br>

        <form method="GET" action="cadastra.php">
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="number" required class="form-control" id="codigo" name="codigo">
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
        </div><!--class="container"-->
    </body>
</html>