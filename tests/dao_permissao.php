<?php
	setlocale(LC_CTYPE, "pt_BR.UTF8");
	include_once("../dao/PermissaoDAO.php");
	include_once("database.php");

	$permissaoDAO = new PermissaoDAO();
	$permissaoDAO->setDatabase($database);

	if((isset($argv[1]) && $argv[0] == "dao_permissao.php" && $argv[1] == "debug") || (isset($argv[1]) && $argv[1] == "debug-all")) {
		echo $permissaoDAO;
	}
?>