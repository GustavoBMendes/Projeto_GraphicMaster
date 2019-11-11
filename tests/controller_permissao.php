<?php
	setlocale(LC_CTYPE, "pt_BR.UTF8");
	include_once("../controller/ControllerPermissao.php");
	include_once("database.php");
	include_once("dao_permissao.php");
	include_once("model_permissao.php");

	$controllerPermissao = new ControllerPermissao();
	$controllerPermissao->setDao($permissaoDAO);

	if((isset($argv[1]) && $argv[0] == "controller_permissao.php" && $argv[1] == "debug") || (isset($argv[1]) && $argv[1] == "debug-all")) {
		echo $controllerPermissao;

	}
?>