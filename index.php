<?php
    include_once("bd.php");
    $listaItens = pesquisarListaItens();
    $somaTotal  = getSomaTotal();

    include_once("cabecalho.php")
?>

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
    
<?php include_once("rodape.php"); ?>