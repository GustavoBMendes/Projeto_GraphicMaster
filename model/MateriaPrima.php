<?php
	include_once("Fornecedor.php");
	class MateriaPrima {
		private $id;
		private $nome;
		private $validade;
		private $unidade;
		private $valor;
		private $quantidade;
		private $fornecedor;

		public function __construct() {}

		public function __destruct() {}

		public function __toString() {
			return "\nID: " . $this->id .
			"\nNOME: " . $this->nome .
			"\nVALIDADE: " . $this->validade->format("Y-m-d") .
			"\nUNIDADE: " . $this->unidade .
			"\nVALOR: R$ " .  number_format($this->valor, 2, ",", ".") .
			"\nQUANTIDADE: " . $this->quantidade .
			"\nFORNECEDOR: " . $this->fornecedor->getNome() . "\n";
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
				$this->nome = strtr(strtoupper($nome),"àáâãçèéêìíîòóôõùú","ÀÁÂÃÇÈÉÊÌÍÎÒÓÔÕÙÚ");
				return TRUE;
			}
		}

		public function setValidade(string $validade) {
			$data = DateTime::createFromFormat("Y-m-d", $validade);
			if($data && $data->format("Y-m-d") === $validade) {
				$this->validade = $data;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setUnidade(string $unidade) {
			$medidas = array("KG", "MG", "G", "KL", "ML", "L", "KM", "MM", "MT", "UN");
			$unidade = strtr(strtoupper($unidade), "àáâãçèéêìíîòóôõùú", "ÀÁÂÃÇÈÉÊÌÍÎÒÓÔÕÙÚ");
			if(in_array($unidade, $medidas)) {
				$this->unidade = $unidade;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setValor(float $valor) {
			if($valor >= 0) {
				$this->valor = $valor;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setQuantidade(int $quantidade) {
			if($quantidade < 0) {
				return FALSE;
			}
			else {
				$this->quantidade = $quantidade;
				return TRUE;
			}
		}

		public function setFornecedor(Fornecedor $fornecedor) {
			if($fornecedor->getId() && $fornecedor->getNome() && $fornecedor->getCnpj()) {
				$this->fornecedor = $fornecedor;
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

		public function getValidade() {
			return $this->validade;
		}

		public function getUnidade() {
			return $this->unidade;
		}

		public function getValor() {
			return $this->valor;
		}

		public function getQuantidade() {
			return $this->quantidade;
		}

		public function getFornecedor() {
			return $this->fornecedor;
		}
	}
?>