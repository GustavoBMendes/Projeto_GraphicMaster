<?php

include_once("../database/materia_prima.sql");

class forncedorDAO{
	private $db;
	public function __construct(){
		$this->db = $db;
	}
	public function __destruct(){}
    private function __clone(){}
    
    public class createMP(MateriaPrima $mp){
        $id = $mp->getId();
		$nome = $mp->getNome();
        $valor = $mp->getValor();
        $unidade = $mp->getUnidade();

		$query = "INSERT INTO 
					MATERIA_PRIMA(ID_PRODUTO, NOME_MP, UNIDADE, VALOR) 
					VALUES('$id', '$nome', '$unidade', $'valor')";
		$stmt = mysqli_stmt_prepare($this->db->getConnection(), $query);
		mysqli_stmt_bind_param($stmt, 'issd', $id, $nome, $unidade, $valor);		
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
    }
    public class readMP(MateriaPrima $mp){
        $id = $mp->getId();
        $query = "SELECT MP.NOME_MP, MP.VALIDADE, MP.UNIDADE, MP.VALOR, MP.QTD_ESTOQUE, MP.ID_FORNECEDOR
                    FROM MATERIA_PRIMA AS MP
                    WHERE $id=MP.ID_PRODUTO"
        $conexao = new mysqli($this->db);
		$read_fornecedor = mysqli_query($conexao,$query)
    }
    public class updateMP(MateriaPrima $mp){
        $id = $mp->getId();
		$nome = $mp->getNome();
        $valor = $mp->getValor();
        $unidade = $mp->getUnidade();
        $data = $mp->getValidade();
        $qtd = $mp->getQuantidade();
        $fornecedor = $mp->getFornecedor();

        $query = "UPDATE MATERIA_PRIMA
                    SET NOME_MP='$nome', VALIDADE='$data', UNIDADE='$unidade', 
                    VALOR='$valor', QTD_ESTOQUE='$qtd', ID_FORNECEDOR='$fornecedor' 
                    WHERE ID_PRODUTO='$id'";
		$stmt = mysqli_stmt_prepare($this->db->getConnection(), $query);
		mysqli_stmt_bind_param($stmt, 'ssd', $nome, $data, $unidade, $valor, $qtd, $fornecedor);		
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
    }
    public class deleteMP(MateriaPrima $mp){
        $id = $mp->getId();

		$query = "DELETE FROM MATERIA_PRIMA
					WHERE ID_PRODUTO='$id'";
		$stmt = mysqli_stmt_prepare($this->db->getConnection(), $query);
		mysqli_stmt_bind_param($stmt, 'i', $id);		
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
    }
}

?>