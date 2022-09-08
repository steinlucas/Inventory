<?php
    include_once("bd.php");
    $listaItens = pesquisarListaItens();
    $somaTotal  = getSomaTotal();
?>

<html>
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <title>Inventory</title>
    </head>

    <body style="background-color: #EEEEEE;">
    <div class="container">
    <br><br><h1>Listagem de itens</h1><br>
    <div class="container">
        <form method="GET">
            <table class="table">
                <thead>
                    <th style="text-align: center" colspan="1">Código</th>
                    <th style="text-align: center" colspan="1">Código de série</th>
                    <th>Descrição</th>
                    <th style="text-align: right">Valor</th>
                    <th style="text-align: center" colspan="2">Opções</th>
                </thead>
                <tbody>
                <?php
                    foreach($listaItens as $umItem) {
                ?>
                    <tr>
                        <td colspan="1" style="text-align: center"><?php echo $umItem['CODIGO'];?></td>
                        <td colspan="1" style="text-align: center"><?php echo $umItem['NUMERO_SERIE'];?></td>
                        <td><?php echo $umItem['DESCRICAO'];?></td>
                        <td colspan="1" style="text-align: right">R$ <?php echo $umItem['VALOR'];?></td>
                        <td colspan="1" style="text-align: center"><a href="atualizarItem.php?idItem=<?php echo $umItem['ID'];?>"><i class="material-icons">edit</i></a></td>
                        <td colspan="1" style="text-align: center"><a href="exclui.php?idItem=<?php echo $umItem['ID'];?>"><i class="material-icons" style="color: red">delete</i></a></td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>

            <br><h5 style="text-align: right">Valor total: R$
            <?php
                foreach ($somaTotal as $soma){
                    echo $soma;
                }
            ?></h5>

            <br><a class="btn btn-primary" style="float: right;" href="cadastrarItem.php">Cadastrar item</a>
        </form>
    </div> <!--class="container">-->
    </body>
    <br><br>
</html>