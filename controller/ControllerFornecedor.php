<?php
	include_once("../dao/FornecedorDAO.php"); // CRIAR CLASSE DAO FORNECEDOR
	include_once("../model/Fornecedor.php");
	class ControllerFornecedor {
		private $dao;

		public function __construct() {}

		public function __destruct() {}

		public function __toString() {
			return "DAO: " . strtoupper(substr(get_class($this->dao), 0, -3)) . "\n";
		}

		public function setDao(FornecedorDAO $dao) {
			if($dao->getDatabase()) {
				$this->dao = $dao;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function getDao() {
			return $this->dao;
		}

		public function procuraId(int $id) {
			return $this->dao->procuraId($id);
		}

		public function procuraCnpj(string $cnpj) {
			return $this->dao->procuraCnpj($cnpj);
		}

		public function procuraNome(string $nome) {
			return $this->dao->procuraNome($nome);
		}

		public function adicionaFornecedor(Fornecedor $fornecedor) {
			return $this->dao->adicionaFornecedor($fornecedor);
		}

		public function alteraFornecedor(Fornecedor $fornecedor) {
			return $this->dao->alteraFornecedor($fornecedor);
		}

		public function removeFornecedor(Fornecedor $fornecedor) {
			return $this->dao->removeFornecedor($fornecedor);
		}

		public function listarFornecedores(int $numero) {
			return $this->dao->listarFornecedores($numero);
		}

		public function validaFornecedor(Fornecedor $fornecedor) {
			if($fornecedor->getId() && $fornecedor->getNome() && $fornecedor->getCnpj()) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
	}
?>