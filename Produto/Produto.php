<?php

include '../Conexao.php';

class Produtos {
	private $id_produto;
	private $id_marca;//fk
	private $id_modelo;//fk
	private $nome;//fk
	private $valor;
	private $descricao;
	
	public function get_id_produto() {
		return $this->id_produto;
	}
	
	public function get_id_marca() {
		return $this->id_marca;
	}
	
	public function get_id_modelo() {
		return $this->id_modelo;
	}
	
	public function get_nome() {
		return $this->nome;
	}
	
	public function get_valor() {
		return $this->valor;
	}
	
	public function get_descricao() {
		return $this->descricao;
	}
	
	public function set_id_produto($temp) {
		$this->id_produto = $temp;
	}
	
	public function set_id_marca($temp) {
		$this->id_marca = $temp;
	}
	
	public function set_id_modelo($temp) {
		$this->id_modelo = $temp;
	}
	
	public function set_nome($temp) {
		$this->nome = $temp;
	}
	
	public function set_valor($temp) {
		$this->valor = $temp;
	}
	
	public function set_descricao($temp) {
		$this->descricao = $temp;
	}
	
	public function carregarPorId($temp) {
        $conexao = new Conexao();
		
		$this->set_id_produto($temp['id_produto']);
		$this->set_id_marca($temp['id_marca']);
		$this->set_id_modelo($temp['id_modelo']);
		$this->set_nome($temp['nome']);
		$this->set_valor($temp['valor']);
		$this->set_descricao($temp['descricao']);
		
        $sql = "select * from voto where id_evento = '$temp'";
        $dados = $conexao->recuperarDados($sql);
		
		//$this->set_id_produto($dados[0]['id_produto']);
		$this->set_id_marca($dados[0]['id_marca']);
		$this->set_id_modelo($dados[0]['id_modelo']);
		$this->set_nome($dados[0]['nome']);
		$this->set_valor($dados[0]['valor']);
		$this->set_descricao($dados[0]['descricao']);
		
		return $dados;
    }
	public function inserir($temp) {
		//$this->set_id_produto($temp['id_produto']);
		$this->set_id_marca($temp['id_marca']);
		$this->set_id_modelo($temp['id_modelo']);
		$this->set_nome($temp['nome']);
		$this->set_valor($temp['valor']);
		$this->set_descricao($temp['descricao']);
		
        $conexao = new Conexao();
		
		//$this->get_id_produto();
		$id_marca = $this->get_id_marca();
		$id_modelo = $this->get_id_modelo();
		$nome = $this->get_nome();
		$valor = $this->get_valor();
		$descricao = $this->get_descricao();
		
        $sql = "insert into products (id_marca, id_modelo, nome, valor, descricao) 
                          values ('$id_marca', '$id_modelo', '$nome', '$valor', '$descricao')";
        return $conexao->executar($sql);
	}
	
	public function recuperarDados() {
		$conexao = new Conexao();
        $sql = "select * from voto order by id_produto";
        return $conexao->recuperarDados($sql);
	}
	
	public function alterar($temp){ 
	    $this->set_id_produto($temp['id_produto']);
		$this->set_id_marca($temp['id_marca']);
		$this->set_id_modelo($temp['id_modelo']);
		$this->set_nome($temp['nome']);
		$this->set_valor($temp['valor']);
		$this->set_descricao($temp['descricao']);
         $conexao = new Conexao();
		
		$id = $this->get_id_produto();
		$id_marca = $this->get_id_marca();
		$id_modelo = $this->get_id_modelo();
		$nome = $this->get_nome();
		$valor = $this->get_valor();
		$descricao = $this->get_descricao();
		
        $sql = "update products set
				  id_produto = '$id',
				  id_marca = '$id_marca',
				  id_modelo = '$id_modelo',
				  nome = '$nome',
				  valor = '$valor',
				  descricao = '$descricao'
                where id_produto = '$id'";
		
		
        return $conexao->executar($sql);
	}
	
	public function excluir($temp) {
		$conexao = new Conexao();
        $sql = "delete from products where id_produto = '$temp'";
        return $conexao->executar($sql);
	}
}
