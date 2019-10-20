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

		public function getId() {
			return $this->id;
		}

		public function getNome() {
			return $this->nome;
		}

	}
?>
