<?php

class PostagemController extends BaseController{
	

	public function getIndex(){
		return View::make('postagens.index');
	}

	public function getAdicionar(){
		return View::make('postagens.create');
	}

	public function postAdicionar(){
		return 'Adicionado os dados';
	}

	public function getEditar($id){
		return "Editando {$id}";
	}

	public function getDeletar($id){
		return "Deletando {$id}";
	}

	public function MissingMethod($params = array()){
		return 'Nada encontrado';
	}
}