<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/psi11090/'.'dao/ItemDAO.php';
try {
    $codProduto = $_GET["codProduto"];
    $dao = new ItemDAO();
    $itens = $dao->selecionarItens($codProduto);
} catch (Exception $e) {
    echo $e->getMessage();
    return;
}
?>
<?php if(sizeof($itens) == 0) { ?>
    <table>
        <tr>
            <td>Não há itens para este produto</td>
        </tr>
    </table>
<?php } else { ?>
    <table class="tblResult">
        <tr>
            <td colspan="9" class="tdResultTitle"><b>Itens: <?=sizeof($itens)?></b></td>
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
        </tr>
    <?php foreach($itens as $obj) { ?>
        <tr>
            <td><?=$obj->getCodProduto()?></td>
            <td><?=$obj->getNome()?></td>
            <td><?=$obj->getDescricao()?></td>
            <td><?=$obj->getCategoria()?></td>
            <td><?=$obj->getAtributo1()?></td>
            <td><?=$obj->getAtributo2()?></td>
            <td><?=$obj->getAtributo3()?></td>
            <td><?=$obj->getAtributo4()?></td>
        </tr>
    <?php } ?>
    </table>
<?php } ?>