<?php

include '../Conexao.php';

class Marca {
	private $id_modelo;
	private $nome;
	private $id_marca;	//PFK
	
	public function get_id_modelo() {
		return $id_modelo;
	}
	
	public function get_nome() {
		return $nome;
	}
	
	public function get_id_marca() {
		return $id_marca;
	}
	
	public function set_id_modelo($temp) {
		$id_modelo = temp;
	}
	
	public function set_nome($temp) {
		$nome = $temp;
	}
	
	public function set_id_marca($temp) {
		$id_marca = $temp;
	}
		
	public function data_retrieve($sql = null) {
		$conexao = new Conexao();
		if (!$sql) {
			$sql = "select * from modelo order by id_modelo";
		}
        return $conexao->recuperarDados($sql);
	}
}
?>