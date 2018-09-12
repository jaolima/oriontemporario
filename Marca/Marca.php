<?php

include '../Conexao.php';

class Marca {
	private $id_modelo;
	private $nome;
	
	public function get_id_modelo() {
		return $id_modelo;
	}
	
	public function get_nome() {
		return $nome;
	}
	
	public function set_id_modelo($temp) {
		$id_modelo = temp;
	}
	
	public function set_nome($temp) {
		$nome = $temp;
	}
	
	public function data_retrieve($sql = null) {
		$conexao = new Conexao();
		if (!$sql) {
			$sql = "select * from marca order by id_marca";
		}
        return $conexao->recuperarDados($sql);
	}
}
?>
