<?php
	require_once("CadastroCont.php");

	$controller = new CadastroCont();
	$resultado = $controller->excluir($_GET['id']);

?>