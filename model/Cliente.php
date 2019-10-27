<?php
	class Cliente {
		private $id;
		private $nome;
		private $cpf;

		public function __construct() {}

		public function __destruct() {}

		public function __toString() {
			return "\nID: " . $this->id .
			"\nNOME: " . $this->nome .
			"\nCPF: " . $this->cpf . "\n";
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

		public function setCpf(string $cpf) {
			$cpf = preg_replace("/[^0-9]/is", "", (string) $cpf);
			if(strlen($cpf) != 11) {
				return FALSE;
			}
			if(preg_match("/(\d)\1{10}/", $cpf)) {
				return FALSE;
			}
			for($t = 9; $t < 11; $t++) {
				for($d = 0, $c = 0; $c < $t; $c++) {
					$d += $cpf{$c} * (($t + 1) - $c);
				}
				$d = ((10 * $d) % 11) % 10;
				if($cpf{$c} != $d) {
					return FALSE;
				}
			}
			$this->cpf = $cpf;
			return TRUE;
		}

		public function getId() {
			return $this->id;
		}

		public function getNome() {
			return $this->nome;
		}

		public function getCpf() {
			return $this->cpf;
		}
	}
?>