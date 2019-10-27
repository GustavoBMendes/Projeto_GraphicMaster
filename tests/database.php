<?php
	setlocale(LC_CTYPE, "pt_BR.UTF8");
	include_once("../database/Database.php");

	$database = new Database();
	$database->setHost("127.0.0.1");
	$database->setUsername("root");
	$database->setPassword("");
	$database->setDatabase("graphic_master");
	$database->setConexao();

	if((isset($argv[1]) && $argv[0] == "database.php" && $argv[1] == "debug") || (isset($argv[1]) && $argv[1] == "debug-all")) {
		echo $database;
	}
?>