<?php
	setlocale(LC_CTYPE, "pt_BR.UTF8");
	include_once("../dao/ClienteDAO.php");
	include_once("database.php");

	$clienteDAO = new ClienteDAO();
	$clienteDAO->setDatabase($database);

	if((isset($argv[1]) && $argv[0] == "dao_cliente.php" && $argv[1] == "debug") || (isset($argv[1]) && $argv[1] == "debug-all")) {
		echo $clienteDAO;
	}
?>