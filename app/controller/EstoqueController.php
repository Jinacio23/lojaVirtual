<?php 

class EstoqueController extends RenderView{

public function index(){

    $bd = new ProductModel();

    $this->loadView('estoque', [
        'produtos' => $bd->fetch()
    ]);

}

public function create(){

    $this->loadView('cadastroProduto');

}

public function store(){

    echo 'Action store';

}

public function edit($id){
    echo 'Action edit - id: '.$id[0];
}

public function update($id){
    echo 'Action update - id: '.$id[0];
}

public function delete($id){
    echo 'Action delete - id: '.$id[0];
}

}