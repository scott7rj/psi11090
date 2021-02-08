$('#frmFiltro').submit(function(ev) {
	ev.preventDefault();
	let produto = $('#txtProduto').val();
	let categoria = $('#txtCategoria').val();
	if($.trim(produto) == '') {
		alert('Preencha o filtro de produto');
		$('#txtProduto').focus();
		return;
	}
	$("#divContent1").html('');
	$("#divContent2").html('');
	$.ajax({
		url: "action/ProdutoListar.php",
		type: "GET",
		data: {produto:produto, categoria:categoria},
		success: function(rst){
			$("#divContent1").html(rst);
		}
	});
});
function itens(codProduto) {
    $("#divContent2").html('');
    
    $.ajax({
        url: "action/ItemListar.php",
        type: "GET",
        data: {
            codProduto:codProduto
        },
        success: function(rst){
            $('#divContent2').html(rst);
        }
    });
}
$(document).ready(function() {
	console.log('jquery ready');
	$("#divContent1").html('');
	$("#divContent2").html('');
});