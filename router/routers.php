<?php

//SINTAXE DE ROTAS
// '/caminhoDefinido' => 'NomeController'@'action'

$routes = [
    '/' => 'LojaController@index',

    //loja
    '/loja' => 'LojaController@index',

    //login
    '/login' => 'LoginController@index',
    
    //estoque
    '/estoque' => 'EstoqueController@index',
    '/estoque-create' => 'EstoqueController@create',
    '/estoque-store' => 'EstoqueController@store',
    '/estoque-edit/{id}' => 'EstoqueController@edit',
    '/estoque-update/{id}' => 'EstoqueController@update',
    '/estoque-delete/{id}' => 'EstoqueController@delete',

    //cadastros
    '/cadastro' => 'CadastroController@index',

    '/cadastro-produto' => 'CadastroProdutoController@index',

    '/cadastro-pagamento' => 'CadastroPagController@index',

    //Recibo
    '/recibo' => 'ReciboController@index',

    //carrinho
    '/carrinho' => 'CarrinhoController@index',

];