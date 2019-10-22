<?php
	class Fornecedor {
		private $id;
		private $nome;
		private $cnpj;

		public function __construct() {}

		public function __destruct() {}

		public function __toString() {
			return "\nID: " . $this->id .
			"\nNOME: " . $this->nome .
			"\nCNPJ: " . $this->cnpj . "\n";
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

		public function setCnpj(string $cnpj) {
			$cnpj = preg_replace("/[^0-9]/", "", (string) $cnpj);
			if(strlen($cnpj) != 14) {
				return FALSE;
			}
			if(preg_match("/(\d)\1{13}/", $cnpj)) {
				return FALSE;
			}
			for($i = 0, $j = 5, $soma = 0; $i < 12; $i++) {
				$soma += $cnpj{$i} * $j;
				$j = ($j == 2) ? 9 : $j - 1;
			}
			$resto = $soma % 11;
			if($cnpj{12} != ($resto < 2 ? 0 : 11 - $resto)) {
				return FALSE;
			}
			for($i = 0, $j = 6, $soma = 0; $i < 13; $i++) {
				$soma += $cnpj{$i} * $j;
				$j = ($j == 2) ? 9 : $j - 1;
			}
			$resto = $soma % 11;
			if($cnpj{13} == ($resto < 2 ? 0 : 11 - $resto)) {
				$this->cnpj = $cnpj;
			}
			return TRUE;
		}

		public function getId() {
			return $this->id;
		}

		public function getNome() {
			return $this->nome;
		}
		
		public function getCnpj() {
			return $this->cnpj;
		}

	}
?>
