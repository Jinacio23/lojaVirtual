<?php

//SINTAXE DE ROTAS
// '/caminhoDefinido' => 'NomeController'@'action'

$routes = [
    '/' => 'EstoqueController@index',
    
    //home
    '/estoque' => 'EstoqueController@index',

    //cadastro
    '/cadastro' => 'CadastroController@index',
    '/cadastroPag' => 'CadastroPagController@index',

    //Pagamentos
    '/pagamentos' => 'PagamentoController@index',

    //loja
    '/loja' => 'LojaController@index',

    //carrinho
    '/carrinho' => 'CarrinhoController@index',

];