<?php
	include_once("../dao/UsuarioDAO.php");
	include_once("ControllerPermissao.php");
	include_once("../model/Usuario.php");
	class ControllerUsuario {
		private $dao;

		public function __construct() {}

		public function __destruct() {}

		public function __toString() {
			return "DAO: " . strtoupper(substr(get_class($this->dao), 0, -3)) . "\n";
		}

		public function setDao(UsuarioDAO $dao) {
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

		public function procuraNome(string $nome) {
			return $this->dao->searchUsuario($nome);
		}

		public function procuraLogin(string $login) {
			return $this->dao->searchLogin($login);
		}

		public function adicionaUsuario(Usuario $usuario) {
			return $this->dao->insertUsuario($usuario);
		}

		public function alteraUsuario(Usuario $usuario) {
			return $this->dao->updateUsuario($usuario);
		}

		public function removeUsuario(Usuario $usuario) {
			return $this->dao->removeUsuario($usuario);
		}

		public function listarUsuarios(int $numero) {
			return $this->dao->listUsuario($numero);
		}

		public function validaUsuario(Usuario $usuario) {
			$controllerPermissao = new ControllerPermissao();
			return $usuario->getId() && $usuario->getNome() && $usuario->getLogin() && $usuario->getSenha() && $controllerPermissao->validaPermissao($usuario->getCargo())) ? TRUE : FALSE;
		}

		public function validaLogin(string $login, string $senha) {
			$usuario = $this->dao->searchLogin($login);
			return $usuario && password_verify($senha, $usuario->getSenha())) ? TRUE : FALSE;
		}
	}
?>