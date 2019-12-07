<?php
	class Permissao {
		private $id;
		private $nome;
		private $readCliente;
		private $insertCliente;
		private $updateCliente;
		private $removeCliente;
		private $readFornecedor;
		private $insertFornecedor;
		private $updateFornecedor;
		private $removeFornecedor;
		private $readMp;
		private $insertMp;
		private $updateMp;
		private $removeMp;
		private $readPermissao;
		private $insertPermissao;
		private $updatePermissao;
		private $removePermissao;
		private $readUsuario;
		private $insertUsuario;
		private $updateUsuario;
		private $removeUsuario;

		public function __construct() {
			$this->readCliente = FALSE;
			$this->insertCliente = FALSE;
			$this->updateCliente = FALSE;
			$this->removeCliente = FALSE;
			$this->readFornecedor = FALSE;
			$this->insertFornecedor = FALSE;
			$this->updateFornecedor = FALSE;
			$this->removeFornecedor = FALSE;
			$this->readMp = FALSE;
			$this->insertMp = FALSE;
			$this->updateMp = FALSE;
			$this->removeMp = FALSE;
			$this->readPermissao = FALSE;
			$this->insertPermissao = FALSE;
			$this->updatePermissao = FALSE;
			$this->removePermissao = FALSE;
			$this->readUsuario = FALSE;
			$this->insertUsuario = FALSE;
			$this->updateUsuario = FALSE;
			$this->removeUsuario = FALSE;
		}

		public function __destruct() {}

		public function __toString() {
			return "\nID: " . $this->id . "\nNOME: " . $this->nome . "\nPERMISSÕES:\tREAD\tINSERT\tUPDATE\tREMOVE\t" . "\nCLIENTE:\t" . $this->readCliente . "\t" . $this->insertCliente . "\t" . $this->updateCliente . "\t" . $this->removeCliente . "\nFORNECEDOR:\t" . $this->readFornecedor . "\t" . $this->insertFornecedor . "\t" . $this->updateFornecedor . "\t" . $this->removeFornecedor . "\nMATÉRIA PRIMA:\t" . $this->readMp . "\t" . $this->insertMp . "\t" . $this->updateMp . "\t" . $this->removeMp . "\nPERMISSÃO:\t" . $this->readPermissao . "\t" . $this->insertPermissao . "\t" . $this->updatePermissao . "\t" . $this->removePermissao . "\nUSUÁRIO:\t" . $this->readUsuario . "\t" . $this->insertUsuario . "\t" . $this->updateUsuario . "\t" . $this->removeUsuario . "\n";
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

		public function setReadCliente($readCliente) {
			$this->readCliente = $readCliente;
		}

		public function setInsertCliente($insertCliente) {
			$this->insertCliente = $insertCliente;
		}

		public function setUpdateCliente($updateCliente) {
			$this->updateCliente = $updateCliente;
		}

		public function setRemoveCliente($removeCliente) {
			$this->removeCliente = $removeCliente;
		}

		public function setReadFornecedor($readFornecedor) {
			$this->readFornecedor = $readFornecedor;
		}

		public function setInsertFornecedor($insertFornecedor) {
			$this->insertFornecedor = $insertFornecedor;
		}

		public function setUpdateFornecedor($updateFornecedor) {
			$this->updateFornecedor = $updateFornecedor;
		}

		public function setRemoveFornecedor($removeFornecedor) {
			$this->removeFornecedor = $removeFornecedor;
		}

		public function setReadMp($readMp) {
			$this->readMp = $readMp;
		}

		public function setInsertMp($insertMp) {
			$this->insertMp = $insertMp;
		}

		public function setUpdateMp($updateMp) {
			$this->updateMp = $updateMp;
		}

		public function setRemoveMp($removeMp) {
			$this->removeMp = $removeMp;
		}

		public function setReadPermissao($readPermissao) {
			$this->readPermissao = $readPermissao;
		}

		public function setInsertPermissao($insertPermissao) {
			$this->insertPermissao = $insertPermissao;
		}

		public function setUpdatePermissao($updatePermissao) {
			$this->updatePermissao = $updatePermissao;
		}

		public function setRemovePermissao($removePermissao) {
			$this->removePermissao = $removePermissao;
		}

		public function setReadUsuario($readUsuario) {
			$this->readUsuario = $readUsuario;
		}

		public function setInsertUsuario($insertUsuario) {
			$this->insertUsuario = $insertUsuario;
		}

		public function setUpdateUsuario($updateUsuario) {
			$this->updateUsuario = $updateUsuario;
		}

		public function setRemoveUsuario($removeUsuario) {
			$this->removeUsuario = $removeUsuario;
		}

		public function getId() {
			return $this->id;
		}

		public function getNome() {
			return $this->nome;
		}

		public function getReadCliente() {
			return $this->readCliente;
		}

		public function getInsertCliente() {
			return $this->insertCliente;
		}

		public function getUpdateCliente() {
			return $this->updateCliente;
		}

		public function getRemoveCliente() {
			return $this->removeCliente;
		}

		public function getReadFornecedor() {
			return $this->readFornecedor;
		}

		public function getInsertFornecedor() {
			return $this->insertFornecedor;
		}

		public function getUpdateFornecedor() {
			return $this->updateFornecedor;
		}

		public function getRemoveFornecedor() {
			return $this->removeFornecedor;
		}

		public function getReadMp() {
			return $this->readMp;
		}

		public function getInsertMp() {
			return $this->insertMp;
		}

		public function getUpdateMp() {
			return $this->updateMp;
		}

		public function getRemoveMp() {
			return $this->removeMp;
		}

		public function getReadPermissao() {
			return $this->readPermissao;
		}

		public function getInsertPermissao() {
			return $this->insertPermissao;
		}

		public function getUpdatePermissao() {
			return $this->updatePermissao;
		}

		public function getRemovePermissao() {
			return $this->removePermissao;
		}

		public function getReadUsuario() {
			return $this->readUsuario;
		}

		public function getInsertUsuario() {
			return $this->insertUsuario;
		}

		public function getUpdateUsuario() {
			return $this->updateUsuario;
		}

		public function getRemoveUsuario() {
			return $this->removeUsuario;
		}
	}
?>