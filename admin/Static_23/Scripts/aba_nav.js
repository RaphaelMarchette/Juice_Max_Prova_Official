function ocultar(id) {
	document.getElementById(id).style.display = "none";
}

function mostrar(id) {
	document.getElementById(id).style.display = "inline-block";

	// var tela = document.getElementById(id)
	// tela.style.display = "inline-block";


}

function ocultar_nav() {
	ocultar('vendas_resumo')
	ocultar('vendas_table')
	ocultar('frutas_table')
	ocultar('sucos_table')
	ocultar('admins_table')
	ocultar('Liquidos_table')
	ocultar('Acrescimos_table')
}

function bt_nav(id_1) {
	ocultar_nav()
	mostrar(id_1)
	if (id_1 == 'vendas_table') {
		mostrar('vendas_resumo')
	}
}

function bt_card(id_1) {
	mostrar(id_1)
}

// mostrar('vendas_resumo')
// mostrar('vendas_table')