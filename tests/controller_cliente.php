<?php
	setlocale(LC_CTYPE, "pt_BR.UTF8");
	include_once("../controller/ControllerCliente.php");
	include_once("database.php");
	include_once("dao_cliente.php");
	include_once("model_cliente.php");

	$controllerCliente = new ControllerCliente();
	$controllerCliente->setDao($clienteDAO);

	if((isset($argv[1]) && $argv[0] == "controller_cliente.php" && $argv[1] == "debug") || (isset($argv[1]) && $argv[1] == "debug-all")) {
		echo $controllerCliente;
	}
?>