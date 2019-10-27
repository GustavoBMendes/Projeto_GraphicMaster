<?php
	setlocale(LC_CTYPE, "pt_BR.UTF8");
	include_once("../model/Cliente.php");

	$cliente1 = new Cliente();
	$cliente1->setId(1);
	$cliente1->setNome("Neymar da Silva Santos Júnior");
	$cliente1->setCpf("382.443.358-31");
	
	$cliente2 = new Cliente();
	$cliente2->setId(2);
	$cliente2->setNome("Romário de Souza Faria");
	$cliente2->setCpf("906.719.537-53");

	$cliente3 = new Cliente();
	$cliente3->setId(3);
	$cliente3->setNome("Ronaldo de Assis Moreira");
	$cliente3->setCpf("956.730.590-00");

	if((isset($argv[1]) && $argv[0] == "model_cliente.php" && $argv[1] == "debug") || (isset($argv[1]) && $argv[1] == "debug-all")) {
		echo $cliente1;
		echo $cliente2;
		echo $cliente3;
	}
?>