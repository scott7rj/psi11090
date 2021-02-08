<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/psi11090/'.'dao/Conexao.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/psi11090/'.'model/Produto.php';

final class ProdutoDAO {

	public function selecionarProdutos($produto, $categoria) {
		$sql = "SELECT * FROM [psi].[produto] WHERE nome LIKE '%{$produto}%'";
		if (!empty($categoria)) {
			$sql .= " AND categoria LIKE '%{$categoria}%'";
		}
		$conn = Conexao::getConnection(); 
		$rst = Conexao::execute($conn, $sql);
		$lst = array();
		while($array = odbc_fetch_array($rst)) {
			$obj = new Produto();
			$obj->setCodProduto($array["cod_produto"]);
			$obj->setNome(utf8_encode($array["nome"]));
			$obj->setDescricao(utf8_encode($array["descricao"]));
			$obj->setCategoria(utf8_encode($array["categoria"]));
			$obj->setAtributo1(utf8_encode($array["atributo1"]));
			$obj->setAtributo2(utf8_encode($array["atributo2"]));
			$obj->setAtributo3(utf8_encode($array["atributo3"]));
			$obj->setAtributo4(utf8_encode($array["atributo4"]));
			array_push($lst, $obj);
		}
		Conexao::close($conn);
		return $lst;
	}
}