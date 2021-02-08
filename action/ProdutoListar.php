<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/psi11090/'.'dao/ProdutoDAO.php';
try {
    $produto = $_GET["produto"];
    $categoria = $_GET["categoria"];
    $dao = new ProdutoDAO();
    $produtos = $dao->selecionarProdutos($produto, $categoria);
} catch (Exception $e) {
    echo $e->getMessage();
    return;
}
?>
<?php if(sizeof($produtos) == 0) { ?>
    <table>
        <tr>
            <td>Não há produtos para este critério de pesquisa</td>
        </tr>
    </table>
<?php } else { ?>
    <table class="tblResult">
        <tr>
            <td colspan="9" class="tdResultTitle"><b>Produtos: <?=sizeof($produtos)?></b></td>
        </tr>
        <tr>
            <th>cod</th>
            <th>nome</th>
            <th>descricao</th>
            <th>categoria</th>
            <th>atributo1</th>
            <th>atributo2</th>
            <th>atributo3</th>
            <th>atributo4</th>
            <th></th>
        </tr>
    <?php foreach($produtos as $obj) { ?>
        <tr>
            <td><?=$obj->getCodProduto()?></td>
            <td><?=$obj->getNome()?></td>
            <td><?=$obj->getDescricao()?></td>
            <td><?=$obj->getCategoria()?></td>
            <td><?=$obj->getAtributo1()?></td>
            <td><?=$obj->getAtributo2()?></td>
            <td><?=$obj->getAtributo3()?></td>
            <td><?=$obj->getAtributo4()?></td>
           <td class="tdResultAction" onclick="itens(<?=$obj->getCodProduto()?>);">
                <b>itens</b>
            </td>
        </tr>
    <?php } ?>
    </table>
<?php } ?>