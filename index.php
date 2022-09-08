<?php
    include_once("bd.php");
    $listaItens = pesquisarListaItens();
?>

<html>
    <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Inventory</title>
    </head>

    <body>
    <div class="container">
    <br><br><h1>Listagem de itens</h1>
    <br><a class="btn btn-primary" href="cadastrarItem.php">Cadastrar item</a>
    <br><br>

    <form method="GET">
        <table class="table">
            <thead>
                <th>Código</th>
                <th>Código de série</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th colspan="2">Opções</th>
            </thead>
            <tbody>
            <?php
                foreach($listaItens as $umItem) {
            ?>
                <tr>
                    <td><?php echo $umItem['CODIGO'];?></td>
                    <td><?php echo $umItem['NUMERO_SERIE'];?></td>
                    <td><?php echo $umItem['DESCRICAO'];?></td>
                    <td><?php echo $umItem['VALOR'];?></td>
                    <td><a href="atualizarItem.php?idItem=<?php echo $umItem['ID'];?>"><i class="material-icons">edit</i></a></td>
                    <td><a href="exclui.php?idItem=<?php echo $umItem['ID'];?>"><i class="material-icons" style="color: red">delete</i></a></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
        <table>
    </form>
    </body>
</html>