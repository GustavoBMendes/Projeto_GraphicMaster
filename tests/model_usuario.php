<?php
	setlocale(LC_CTYPE, "pt_BR.UTF8");
	include_once("../model/Usuario.php");
	include_once("model_permissao.php");

	$usuario1 = new Usuario();
	$usuario1->setId(1);
	$usuario1->setNome("Luiz Joaquim Aderaldo Amichi");
	$usuario1->setLogin("luizjoaquim");
	$usuario1->setSenha("luizjoaquim");
	$usuario1->setCargo($permissao1);
	
	$usuario2 = new Usuario();
	$usuario2->setId(2);
	$usuario2->setNome("Gustavo Belançon Mendes");
	$usuario2->setLogin("gustavo");
	$usuario2->setSenha("mendes");
	$usuario2->setCargo($permissao2);
	
	$usuario3 = new Usuario();
	$usuario3->setId(3);
	$usuario3->setNome("Fernando Silva Silvério");
	$usuario3->setLogin("fernando");
	$usuario3->setSenha("silverio");
	$usuario3->setCargo($permissao3);

	$usuario4 = new Usuario();
	$usuario4->setId(4);
	$usuario4->setNome("Héctor Dorrighello Giacon");
	$usuario4->setLogin("hector");
	$usuario4->setSenha("camaroamarelo");
	$usuario4->setCargo($permissao4);

	if((isset($argv[1]) && $argv[0] == "model_usuario.php" && $argv[1] == "debug") || (isset($argv[1]) && $argv[1] == "debug-all")) {
		echo $usuario1;
		echo $usuario2;
		echo $usuario3;
		echo $usuario4;
	}
?>