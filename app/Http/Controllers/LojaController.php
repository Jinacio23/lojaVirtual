<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LojaController extends Controller
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

    function index(){
        return view("telacliente", [//retornando dados
            "dados" => $this->fakeProducts,
        ]);
    }
}
