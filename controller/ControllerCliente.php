<?php
	include_once("../dao/ClienteDAO.php");
	include_once("../model/Cliente.php");
	class ControllerCliente {
		private $dao;

		public function __construct() {}

		public function __destruct() {}

		public function __toString() {
			return "DAO: " . strtoupper(substr(get_class($this->dao), 0, -3)) . "\n";
		}

		public function setDao(ClienteDAO $dao) {
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
			return $this->dao->searchId($id);
		}

		public function procuraCpf(string $cpf) {
			return $this->dao->searchCpf($cpf);
		}

		public function procuraNome(string $nome) {
			return $this->dao->searchCliente($nome);
		}

		public function adicionaCliente(Cliente $cliente) {
			return $this->dao->insertCliente($cliente);
		}

		public function alteraCliente(Cliente $cliente) {
			return $this->dao->updateCliente($cliente);
		}

		public function removeCliente(Cliente $cliente) {
			return $this->dao->removeCliente($cliente);
		}

		public function listarClientes(int $numero) {
			return $this->dao->listCliente($numero);
		}

		public function validaCliente(Cliente $cliente) {
			if($cliente->getId() && $cliente->getNome() && $cliente->getCpf()) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
	}
?>