<?php
	include_once("../dao/UsuarioDAO.php");
	include_once("../controller/ControllerUsuario.php");
	include_once("../model/Usuario.php");
	class UsuarioView {
		private $usuario;

		public function __construct() {}

		public function __destruct() {}

		public function __toString() {
			return "\n" . $this->usuario->getNome() . "\nLER | INSERIR | ALTERAR | REMOVER\n" . $this->usuario->getCargo()->getReadUsuario() . "     " . $this->usuario->getCargo()->getInsertUsuario() . "         " . $this->usuario->getCargo()->getUpdateUsuario() . "         " . $this->usuario->getCargo()->getRemoveUsuario() . "\n";
		}

		public function setUsuario(Usuario $usuario) {
			$this->usuario = $usuario;
		}

		public function getRead() {
			return $this->usuario->getCargo()->getReadUsuario() ? '<a href="busca_usuario.php">Procurar Usuário</a>' : '';
		}

		public function getInsert() {
			return $this->usuario->getCargo()->getInsertUsuario() ? '<a href="adiciona_usuario.php">Cadastrar Usuário</a>' : '';
		}

		public function getUpdate() {
			return $this->usuario->getCargo()->getUpdateUsuario() ? '<a href="altera_usuario.php">Alterar Usuário</a>' : '';
		}

		public function getRemove() {
			return $this->usuario->getCargo()->getRemoveUsuario() ? '<a href="remove_usuario.php">Remover Usuário</a>' : '';
		}

		public function getCrud() {
			return $this->usuario->getCargo()->getReadUsuario() || $this->usuario->getCargo()->getInsertUsuario() || $this->usuario->getCargo()->getUpdateUsuario() || $this->usuario->getCargo()->getRemoveUsuario() ? '<a href="usuario.php">Gerenciamento de Usuários</a>' : "";
			}
		}
	}
?>