<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    private $fakeProducts = [//simulando banco
        [
            "id"=> 0,
            "title"=> "produto1",
            "descricao"=> "um produto muito bom!",
            "preco"=> "5,99",
        ],
        [
            "id"=> 1,
            "title"=> "produto2",
            "descricao"=> "um produto bem bom!",
            "preco"=> "3,44",
        ],
        [
            "id"=> 2,
            "title"=> "produto3",
            "descricao"=> "um produto",
            "preco"=> "3,44",
        ],
    ];

    private $itemsCarrinho = [];//simulação da tabela do carrinho

    function index(){
        return view('telacarrinho', [
            //os itens na view só não retornam por persistencia de dados
            //Com os dados da tabela no banco os registro serão exibidos sem problemas, atribua fakeProducts à items para vizualizar
            "items" => $this->itemsCarrinho,
        ]);
    }

    function update($id) {
        //simulando atualização de registros adicionados ao carrinho
        array_push($this->itemsCarrinho,$this->fakeProducts[$id]);

        return view('telacliente',[
            'dados' => $this->fakeProducts,
        ]);
    }
}
