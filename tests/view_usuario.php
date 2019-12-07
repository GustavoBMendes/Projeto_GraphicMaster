<?php
	setlocale(LC_CTYPE, "pt_BR.UTF8");
	include_once("../view/UsuarioView.php");
	include_once("controller_usuario.php");
	include_once("database.php");
	include_once("model_usuario.php");

	$usuarioView1 = new UsuarioView();
	$usuarioView1->setUsuario($usuario1);

	$usuarioView2 = new UsuarioView();
	$usuarioView2->setUsuario($usuario2);

	$usuarioView3 = new UsuarioView();
	$usuarioView3->setUsuario($usuario3);

	$usuarioView4 = new UsuarioView();
	$usuarioView4->setUsuario($usuario4);

	if((isset($argv[1]) && $argv[0] == "view_usuario.php" && $argv[1] == "debug") || (isset($argv[1]) && $argv[1] == "debug-all")) {
		echo $usuarioView1;
		echo $usuarioView2;
		echo $usuarioView3;
		echo $usuarioView4;
	}
?>