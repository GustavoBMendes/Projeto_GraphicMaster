<?php
	include_once("../dao/PermissaoDAO.php");
	include_once("../controller/ControllerPermissao.php");
	include_once("../model/Permissao.php");
	include_once("../model/Usuario.php");
	class PermissaoView {
		private $usuario;

		public function __construct() {}

		public function __destruct() {}

		public function __toString() {
			return "\n" . $this->usuario->getNome() . "\nLER | INSERIR | ALTERAR | REMOVER\n" . $this->usuario->getCargo()->getReadPermissao() . "     " . $this->usuario->getCargo()->getInsertPermissao() . "         " . $this->usuario->getCargo()->getUpdatePermissao() . "         " . $this->usuario->getCargo()->getRemovePermissao() . "\n";
		}

		public function setUsuario(Usuario $usuario) {
			$this->usuario = $usuario;
		}

		public function getRead() {
			return $this->usuario->getCargo()->getReadPermissao() ? '<a href="busca_permissao.php">Procurar Cargo</a>' : "";
		}

		public function getInsert() {
			return $this->usuario->getCargo()->getInsertPermissao() ? '<a href="adiciona_permissao.php">Cadastrar Cargo</a>' : "";
		}

		public function getUpdate() {
			return $this->usuario->getCargo()->getUpdatePermissao() ? '<a href="altera_permissao.php">Alterar Cargo</a>' : "";
		}

		public function getRemove() {
			return $this->usuario->getCargo()->getRemovePermissao() ? '<a href="remove_permissao.php">Remover Cargo</a>' : "";
		}

		public function getCrud() {
			return $this->usuario->getCargo()->getReadPermissao() || $this->usuario->getCargo()->getInsertPermissao() || $this->usuario->getCargo()->getUpdatePermissao() || $this->usuario->getCargo()->getRemovePermissao()) ? '<a href="permissao.php">Gerenciamento de Cargos</a>' : "";
			}
			else {
				return "";
			}
		}
	}
?>