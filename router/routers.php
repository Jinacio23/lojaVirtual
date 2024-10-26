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

    //cadastros
    '/cadastro' => 'CadastroController@index',

    '/cadastro-produto' => 'CadastroProdutoController@index',

    '/cadastro-pagamento' => 'CadastroPagController@index',

    //Recibo
    '/recibo' => 'ReciboController@index',

    //carrinho
    '/carrinho' => 'CarrinhoController@index',

];