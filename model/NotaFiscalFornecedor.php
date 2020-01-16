<?php
	include_once("Fornecedor.php");
	include_once("MateriaPrima.php");
	class NotaFiscalFornecedor {
		private $id;
		private $fornecedor;
		private $produtos = array();
		private $valor;

		public function __construct() {}

		public function __destruct() {}

		public function __toString() {
			$nfc = "\nID: " . $this->id .
			"\nFORNECEDOR: " . $this->fornecedor->getNome() .
			"\nPRODUTOS:\t" . "ID\t" . "NOME\t\t" . "QUANTIDADE\t" . "VALOR UNITÁRIO";
			foreach($this->produtos as $produto) {
				$nfc .= "\n\t\t" . $produto->getId() . "\t" . $produto->getNome() . "\t\t" . $produto->getQuantidade() . "\t\t" . number_format($produto->getValor(), 2, ",", ".");
			}
			return $nfc . "\nVALOR: R$ " . number_format($this->getValor(), 2, ",", ".") ."\n";
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

		public function setFornecedor(Fornecedor $fornecedor) {
			if($fornecedor->getId() && $fornecedor->getNome() && $fornecedor->getCnpj()) {
				$this->fornecedor = $fornecedor;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setProduto(MateriaPrima $produto, int $quantidade, float $valor) {
			if($produto->getId() && $produto->getNome() && $produto->getQuantidade() && $produto->getValor() && $quantidade > 0 && $valor >= 0.0) {
				$produto->setQuantidade($quantidade);
				$produto->setValor($valor);
				array_push($this->produtos, $produto);
				$this->valor += $quantidade * $valor;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function getId() {
			return $this->id;
		}

		public function getFornecedor() {
			return $this->fornecedor;
		}

		public function getProdutos() {
			return $this->produtos;
		}

		public function getValor() {
			return $this->valor;
		}
	}
?>