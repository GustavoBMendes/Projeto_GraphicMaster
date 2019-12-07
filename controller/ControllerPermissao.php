<?php
	include_once("../dao/PermissaoDAO.php");
	include_once("../model/Permissao.php");
	class ControllerPermissao {
		private $dao;

		public function __construct() {}

		public function __destruct() {}

		public function __toString() {
			return "DAO: " . strtoupper(substr(get_class($this->dao), 0, -3)) . "\n";
		}

		public function setDao(PermissaoDAO $dao) {
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
			return $this->dao->searchPermissao($nome);
		}

		public function procuraNomeCompleto(string $nomeCompleto) {
			return $this->dao->searchNome($nomeCompleto);
		}

		public function adicionaPermissao(Permissao $permissao) {
			return $this->dao->insertPermissao($permissao);
		}

		public function alteraPermissao(Permissao $permissao) {
			return $this->dao->updatePermissao($permissao);
		}

		public function removePermissao(Permissao $permissao) {
			return $this->dao->removePermissao($permissao);
		}

		public function listarPermissoes(int $numero) {
			return $this->dao->listPermissao($numero);
		}

		public function validaPermissao(Permissao $permissao) {
			return ($permissao->getId() && $permissao->getNome()) || $permissao->getReadCliente() || $permissao->getInsertCliente() || $permissao->getUpdateCliente() || $permissao->getRemoveCliente() || $permissao->getReadFornecedor() || $permissao->getInsertFornecedor() || $permissao->getUpdateFornecedor() || $permissao->getRemoveFornecedor() || $permissao->getReadMp() || $permissao->getInsertMp() || $permissao->getUpdateMp() || $permissao->getRemoveMp() || $permissao->getReadPermissao() || $permissao->getInsertPermissao() || $permissao->getUpdatePermissao() || $permissao->getRemovePermissao() || $permissao->getReadUsuario() || $permissao->getInsertUsuario() || $permissao->getUpdateUsuario() || $permissao->getRemoveUsuario() ? TRUE : FALSE;
		}
	}
?>