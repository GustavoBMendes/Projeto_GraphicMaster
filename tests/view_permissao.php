<?php
	setlocale(LC_CTYPE, "pt_BR.UTF8");
	include_once("../view/PermissaoView.php");
	include_once("controller_permissao.php");
	include_once("database.php");
	include_once("model_usuario.php");

	$permissaoView1 = new PermissaoView();
	$permissaoView1->setUsuario($usuario1);

	$permissaoView2 = new PermissaoView();
	$permissaoView2->setUsuario($usuario2);

	$permissaoView3 = new PermissaoView();
	$permissaoView3->setUsuario($usuario3);

	$permissaoView4 = new PermissaoView();
	$permissaoView4->setUsuario($usuario4);

	if((isset($argv[1]) && $argv[0] == "view_permissao.php" && $argv[1] == "debug") || (isset($argv[1]) && $argv[1] == "debug-all")) {
		echo $permissaoView1;
		echo $permissaoView2;
		echo $permissaoView3;
		echo $permissaoView4;
	}
?>