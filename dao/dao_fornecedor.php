<?php

include_once("../database/database.php");

class forncedorDAO{
	private $db;
	public function __construct(){
		$this->db = $db;
	}
	public function __destruct(){}
	private function __clone(){}

	public function createFornecedor(Fornecedor $fornecedor){
		$id = $fornecedor->getId();
		$nome = $fornecedor->getNome();
		$cnpj = $fornecedor->getCnpj();

		$query = "INSERT INTO 
					FORNECEDOR(ID_FORNECEDOR, NOME_FORNECEDOR, CNPJ) 
					VALUES('$id', '$nome', 'cnpj')";
		$stmt = mysqli_stmt_prepare($this->db->getConnection(), $query);
		mysqli_stmt_bind_param($stmt, 'iss', $id, $nome, $cnpj);		
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	public function readFornecedor(Fornecedor $fornecedor){
		$id = $fornecedor->getId();
		$query = "SELECT FORNECEDOR.NOME_FORNECEDOR, FORNECEDOR.CNPJ
					FROM FORNECEDOR
					WHERE '$id' = FORNECEDOR.ID_FORNECEDOR";
		$conexao = new mysqli($this->db);
		$read_fornecedor = mysqli_query($conexao,$query)
	}
	public function updateFornecedor(Fornecedor $fornecedor){
		$id = $fornecedor->getId();
		$nome = $fornecedor->getNome();

		$query = "UPDATE FORNECEDOR 
					SET NOME_FORNECEDOR='$nome' 
					WHERE ID_FORNECEDOR='$id')";
		$stmt = mysqli_stmt_prepare($this->db->getConnection(), $query);
		mysqli_stmt_bind_param($stmt, 'is', $id, $nome);		
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
	public function deleteFornecedor(Fornecedor $fornecedor){
		$id = $fornecedor->getId();

		$query = "DELETE FROM FORNECEDOR 
					WHERE ID_FORNECEDOR='$id'";
		$stmt = mysqli_stmt_prepare($this->db->getConnection(), $query);
		mysqli_stmt_bind_param($stmt, 'i', $id);		
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
	}
}

?>
