<?php
	include_once("Permissao.php");
	class Usuario {
		private $id;
		private $nome;
		private $login;
		private $senha;
		private $cargo;

		public function __construct() {}

		public function __destruct() {}

		public function __toString() {
			return "\nID: " . $this->id . "\nNOME: " . $this->nome . "\nLOGIN: " . $this->login . "\nSENHA: " . $this->senha . "\nCARGO: " . $this->cargo->getNome() . "\n";
		}

		public function setId(int $id) {
			if($id <= 0) {
				return FALSE;
			}
			else {
				$this->id = $id;
				return TRUE;
			}
		}

		public function setNome(string $nome) {
			if(strlen($nome) > 64) {
				return FALSE;
			}
			else {
				$this->nome = strtr(strtoupper($nome), "àáâãçèéêìíîòóôõùú", "ÀÁÂÃÇÈÉÊÌÍÎÒÓÔÕÙÚ");
				return TRUE;
			}
		}

		public function setLogin(string $login) {
			if(strlen($login) >= 6) {
				$this->login = $login;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setSenha(string $senha) {
			if(strlen($senha) >= 6) {
				$this->senha = password_hash($senha, PASSWORD_DEFAULT);
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setCargo(Permissao $cargo) {
			if($cargo->getId() && $cargo->getNome()) {
				$this->cargo = $cargo;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function getId() {
			return $this->id;
		}

		public function getNome() {
			return $this->nome;
		}

		public function getLogin() {
			return $this->login;
		}

		public function getSenha() {
			return $this->senha;
		}

		public function getCargo() {
			return $this->cargo;
		}
	}
?>