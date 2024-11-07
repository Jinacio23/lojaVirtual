<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Online - Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .container {
            padding: 20px;
        }
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-around;
        }
        .product-card {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 250px;
        }
        .product-card img {
            width: 100%;
            height: auto;
        }
        .product-card button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        .product-card button:hover {
            background-color: #218838;
        }
        .cart-link {
            text-decoration: none;
            color: white;
            font-weight: bold;
            position: absolute;
            top: 15px;
            right: 20px;
            background-color: #007bff;
            padding: 10px 15px;
            border-radius: 5px;
        }
        .cart-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Loja Online</h1>
        <a class="cart-link" href={{route('carrinho.index')}}>Carrinho de Compras</a>
        <a href="login" style="color: #fff;">login</a>
        <a href="estoque" style="color: #fff;">Admin</a>
    </header>

    <div class="container">
        <h2>Produtos Disponíveis</h2>
        <div class="product-grid">

            <?php foreach ($dados as $produto) { ?>
                <!-- Produto -->
                <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Produto 1">
                <h3>{{$produto['title']}}</h3>
                <p>{{$produto['descricao']}}</p>
                <p><strong>{{$produto['preco']}}</strong></p>
                <a href={{route('carrinho.update',$produto['id'])}}><button>Adicionar ao Carrinho</button></a>
            </div>
            <?php } ?>
        </div>
    </div>

</body>
</html>
