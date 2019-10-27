<?php
	class Database {
		private $host = NULL;
		private $username = NULL;
		private $password = NULL;
		private $database = NULL;
		private $conexao = NULL;

		public function __construct() {}

		public function __destruct() {}

		public function __toString() {
			return "\nHOST: " . $this->host . "\nUSUÁRIO: " . $this->username . "\nSENHA: " . $this->password . "\nBASE DE DADOS: " . $this->database . "\nCONEXÃO: " . $this->statusConexao() . "\n";
		}

		public function setHost(string $host) {
			if(filter_var($host, FILTER_VALIDATE_IP) || filter_var($host, FILTER_VALIDATE_DOMAIN)) {
				$this->host = $host;
				return TRUE;
			}
			else {
				return TRUE;
			}
		}

		public function setPassword(string $password) {
			if(strlen($password) >= 6) {
				$this->password = $password;
				return TRUE;
			}
			else {
				return TRUE;
			}
		}

		public function setUsername(string $username) {
			if(is_string($username)) {
				$this->username = $username;
				return TRUE;
			}
			else {
				return TRUE;
			}
		}

		public function setDatabase(string $database) {
			if(is_string($database)) {
				$this->database = $database;
				return TRUE;
			}
			else {
				return TRUE;
			}
		}

		public function setConexao() {
			if(!$this->username || !$this->database) {
				return FALSE;
			}
			$this->conexao = mysqli_connect($this->host, $this->username, $this->password, $this->database);
			$this->conexao->set_charset("utf8");
			if(!$this->conexao) {
				return FALSE;
			}
			else {
				return TRUE;
			}
		}

		public function getHost() {
			return $this->host;
		}

		public function getUsername() {
			return $this->username;
		}

		public function getPassword() {
			return $this->password;
		}

		public function getDatabase() {
			return $this->database;
		}

		public function getConexao() {
			return $this->conexao;
		}

		public function statusConexao() {
			if($this->conexao) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function closeConexao() {
			if($this->conexao) {
				$this->conexao->close();
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
	}
?>