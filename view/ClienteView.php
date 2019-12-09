<?php
	include_once("../dao/ClienteDAO.php");
	include_once("../controller/ControllerCliente.php");
	include_once("../model/Cliente.php");
	include_once("../model/Cliente.php");
	class ClienteView {
		private $cliente;

		public function __construct() {}

		public function __destruct() {}

		public function __toString() {
			return "\n" . $this->cliente->getNome() . "\nLER | INSERIR | ALTERAR | REMOVER\n" . $this->cliente->getCargo()->getReadCliente() . "     " . $this->cliente->getCargo()->getInsertCliente() . "         " . $this->cliente->getCargo()->getUpdateCliente() . "         " . $this->cliente->getCargo()->getRemoveCliente() . "\n";
		}

		public function setCliente(Cliente $cliente) {
			$this->cliente = $cliente;
		}

		public function getRead() {
			return $this->cliente->getCargo()->getReadCliente() ? '<a href="busca_cliente.php">Procurar Cliente</a>' : '';
		}

		public function getInsert() {
			return $this->cliente->getCargo()->getInsertCliente() ? '<a href="adiciona_cliente.php">Cadastrar Cliente</a>' : '';
		}

		public function getUpdate() {
			return $this->cliente->getCargo()->getUpdateCliente() ? '<a href="altera_cliente.php">Alterar Cliente</a>' : '';
		}

		public function getRemove() {
			return $this->cliente->getCargo()->getRemoveCliente() ? '<a href="remove_cliente.php">Remover Cliente</a>' : '';
		}

		public function getCrud() {
			return $this->cliente->getCargo()->getReadCliente() || $this->cliente->getCargo()->getInsertCliente() || $this->cliente->getCargo()->getUpdateCliente() || $this->cliente->getCargo()->getRemoveCliente() ? '<a href="cliente.php">Gerenciamento de Clientes</a>' : "";
			}
		}
	}
?>