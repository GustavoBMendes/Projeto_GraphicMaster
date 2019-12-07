<?php
	setlocale(LC_CTYPE, "pt_BR.UTF8");
	include_once("../view/ClienteView.php");
	include_once("controller_cliente.php");
	include_once("database.php");
	include_once("model_usuario.php");

	$clienteView1 = new ClienteView();
	$clienteView1->setUsuario($usuario1);

	$clienteView2 = new ClienteView();
	$clienteView2->setUsuario($usuario2);

	$clienteView3 = new ClienteView();
	$clienteView3->setUsuario($usuario3);

	$clienteView4 = new ClienteView();
	$clienteView4->setUsuario($usuario4);

	if((isset($argv[1]) && $argv[0] == "view_cliente.php" && $argv[1] == "debug") || (isset($argv[1]) && $argv[1] == "debug-all")) {
		echo $clienteView1;
		echo $clienteView2;
		echo $clienteView3;
		echo $clienteView4;
	}
?>