<?php 

class EstoqueController extends RenderView{

public function index(){

    $users = new UserModel();

    $this->loadView('estoque', []);

}

}