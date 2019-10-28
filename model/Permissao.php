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
			return "\nID: " . $this->id .
			"\nNOME: " . $this->nome .
			"\nPERMISSÕES:\tREAD\tINSERT\tUPDATE\tREMOVE\t" .
			"\nCLIENTE:\t" . $this->readCliente . "\t" . $this->insertCliente . "\t" . $this->updateCliente . "\t" . $this->removeCliente .
			"\nFORNECEDOR:\t" . $this->readFornecedor . "\t" . $this->insertFornecedor . "\t" . $this->updateFornecedor . "\t" . $this->removeFornecedor .
			"\nMATÉRIA PRIMA:\t" . $this->readMp . "\t" . $this->insertMp . "\t" . $this->updateMp . "\t" . $this->removeMp .
			"\nPERMISSÃO:\t" . $this->readPermissao . "\t" . $this->insertPermissao . "\t" . $this->updatePermissao . "\t" . $this->removePermissao .
			"\nUSUÁRIO:\t" . $this->readUsuario . "\t" . $this->insertUsuario . "\t" . $this->updateUsuario . "\t" . $this->removeUsuario . "\n";
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
			if(is_bool($readCliente)) {
				$this->readCliente = $readCliente;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setInsertCliente($insertCliente) {
			if(is_bool($insertCliente)) {
				$this->insertCliente = $insertCliente;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setUpdateCliente($updateCliente) {
			if(is_bool($updateCliente)) {
				$this->updateCliente = $updateCliente;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setRemoveCliente($removeCliente) {
			if(is_bool($removeCliente)) {
				$this->removeCliente = $removeCliente;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setReadFornecedor($readFornecedor) {
			if(is_bool($readFornecedor)) {
				$this->readFornecedor = $readFornecedor;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setInsertFornecedor($insertFornecedor) {
			if(is_bool($insertFornecedor)) {
				$this->insertFornecedor = $insertFornecedor;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setUpdateFornecedor($updateFornecedor) {
			if(is_bool($updateFornecedor)) {
				$this->updateFornecedor = $updateFornecedor;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setRemoveFornecedor($removeFornecedor) {
			if(is_bool($removeFornecedor)) {
				$this->removeFornecedor = $removeFornecedor;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setReadMp($readMp) {
			if(is_bool($readMp)) {
				$this->readMp = $readMp;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setInsertMp($insertMp) {
			if(is_bool($insertMp)) {
				$this->insertMp = $insertMp;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setUpdateMp($updateMp) {
			if(is_bool($updateMp)) {
				$this->updateMp = $updateMp;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setRemoveMp($removeMp) {
			if(is_bool($removeMp)) {
				$this->removeMp = $removeMp;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setReadPermissao($readPermissao) {
			if(is_bool($readPermissao)) {
				$this->readPermissao = $readPermissao;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setInsertPermissao($insertPermissao) {
			if(is_bool($insertPermissao)) {
				$this->insertPermissao = $insertPermissao;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setUpdatePermissao($updatePermissao) {
			if(is_bool($updatePermissao)) {
				$this->updatePermissao = $updatePermissao;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setRemovePermissao($removePermissao) {
			if(is_bool($removePermissao)) {
				$this->removePermissao = $removePermissao;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setReadUsuario($readUsuario) {
			if(is_bool($readUsuario)) {
				$this->readUsuario = $readUsuario;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setInsertUsuario($insertUsuario) {
			if(is_bool($insertUsuario)) {
				$this->insertUsuario = $insertUsuario;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setUpdateUsuario($updateUsuario) {
			if(is_bool($updateUsuario)) {
				$this->updateUsuario = $updateUsuario;
				return TRUE;
			}
			else {
				return FALSE;
			}
		}

		public function setRemoveUsuario($removeUsuario) {
			if(is_bool($removeUsuario)) {
				$this->removeUsuario = $removeUsuario;
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