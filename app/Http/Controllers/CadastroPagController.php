<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroPagController extends Controller
{
    function index(){
        return view("cadastropag");
    }

    function store(){
        dd("teste");
        $dadosPagamento = [];
        
        $name = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $cep = $_POST['cep'];
        $formaPagamento = $_POST['forma_pagamento'];

        //Não consegui conferir com clareza, por falta do banco, mas a princípio os dados estão sendo recuperados
        array_push($dadosPagamento,$name,$cpf,$endereco,$cep,$formaPagamento);

    }
}