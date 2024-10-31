<?php

class EstoqueController extends RenderView
{

    public function index()
    {

        $bd = new ProductModel();

        $this->loadView('estoque', [
            'produtos' => $bd->fetch()
        ]);

    }

    public function create()
    {

        $this->loadView('cadastroProduto');

    }

    public function store()
    {

        $bd = new ProductModel();

        $name = $_POST['name'];
        $estoque = $_POST['estoque'];
        $preco = $_POST['preco'];
        $description = $_POST['description'];

        $sql = "INSERT INTO produtos (nome,descricao,preco,quantidade) 
        VALUES ('$name','$description','$preco','$estoque');";

        $bd->query($sql);

        header('Location: estoque');

    }

    public function edit($id)
    {
        $bd = new ProductModel();

        $this->loadView('atualizarProduto',[
            'id' => $id[0],
            'dados' => $bd->fetchById($id[0])
        ]);
    }

    public function update($id)
    {
        $bd = new ProductModel();

        $name = $_POST['name'];
        $estoque = $_POST['estoque'];
        $preco = $_POST['preco'];
        $description = $_POST['description'];

        $sql = "UPDATE produtos 
        SET nome='$name', descricao='$description', preco='$preco', quantidade='$estoque' WHERE id='$id[0]'";

        $bd->query($sql);
        
        header('Location: ../estoque');
    }

    public function delete($id)
    {
        $bd = new ProductModel();

        $sql = "DELETE FROM produtos WHERE id='$id[0]'";

        $bd->query($sql);
        
        header('Location: ../estoque');
    }

}