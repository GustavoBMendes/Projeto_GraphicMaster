<?php
	setlocale(LC_CTYPE, "pt_BR.UTF8");
	include_once("../controller/ControllerUsuario.php");
	include_once("database.php");
	include_once("dao_usuario.php");
	include_once("model_usuario.php");

	$controllerUsuario = new ControllerUsuario();
	$controllerUsuario->setDao($usuarioDAO);

	if((isset($argv[1]) && $argv[0] == "controller_usuario.php" && $argv[1] == "debug") || (isset($argv[1]) && $argv[1] == "debug-all")) {
		echo $controllerUsuario;
	}
?>