<?php
	setlocale(LC_CTYPE, "pt_BR.UTF8");
	include_once("../dao/UsuarioDAO.php");
	include_once("database.php");

	$usuarioDAO = new UsuarioDAO();
	$usuarioDAO->setDatabase($database);

	if((isset($argv[1]) && $argv[0] == "dao_usuario.php" && $argv[1] == "debug") || (isset($argv[1]) && $argv[1] == "debug-all")) {
		echo $usuarioDAO;
	}
?>