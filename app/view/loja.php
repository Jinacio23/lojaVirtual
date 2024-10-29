<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Online - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .container {
            padding: 20px;
            transition: transform .5s;
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

        /* .product-card button {
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
        } */

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

        /* Carrinho */
        svg {
            width: 30px;
        }

        .icon-cart {
            position: relative;
        }

        .icon-cart span {
            position: absolute;
            background-color: red;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: #fff;
            top: 50%;
            right: -20px;
        }

        .cartTab {
            width: 400px;
            background-color: #353432;
            color: #eee;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            inset: 0 -400px 0 auto;
            display: grid;
            grid-template-rows: 70px 1fr 70px;
            transition: 0.5s;
        }

        .cartTab h1 {
            padding: 20px;
            margin: 0;
            font-weight: 300;
        }

        body.showCart .cartTab {
            inset: 0 0 0 auto;
        }

        body.showCart .container {
            transform: translateX(-200px);
        }

        .cartTab .btn {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .cartTab .btn button {
            background-color: #e8bc0e;
            border: none;
            font-family: Poppins;
            font-weight: 500;
            cursor: pointer;
        }

        .cartTab .btn .close {
            background-color: #eee;
        }

        .cartTab .listCart .item img {
            width: 100%;
        }

        .cartTab .listCart .item {
            display: grid;
            grid-template-columns: 70px 150px 50px 1fr;
            gap: 10px;
            text-align: center;
            align-items: center;
        }

        .cartTab .quantity span {
            display: inline-block;
            width: 25px;
            height: 25px;
            background-color: #eee;
            color: #555;
            border-radius: 50%;
            cursor: pointer;
        }

        .listCart .quantity span:nth-child(2) {
            background-color: transparent;
            color: #eee;
        }

        .listCart .item:nth-child(even) {
            background-color: #eee1;
        }

        .listCart {
            overflow: auto;
        }

        .listCart::-webkit-scrollbar {
            width: 0;
        }
    </style>
</head>

<body>

    <header>
        <h1>Loja Online</h1>
        <a href="login" style="color: #fff;">Sign in</a>
        <!-- <a class="cart-link" href="carrinho">Carrinho de Compras</a> -->
        <div class="icon-cart">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
            </svg>
            <span>0</span>
        </div>
    </header>

    <div class="container">
        <h2>Produtos Disponíveis</h2>
        <div class="product-grid listProduct">
            <!-- Produto 1 -->
            <div class="product-card" data-id="1">
                <img src="https://i.pinimg.com/originals/7a/a5/e4/7aa5e42b00ef38479da133b4aa9069be.jpg" alt="Produto 1">
                <h3>Produto 1</h3>
                <p>Descrição do produto 1</p>
                <p><strong>R$ 100,00</strong></p>
                <button class="addCart btn btn-sm btn-outline-warning button-hover-background fs-6">Adicionar ao Carrinho</button>
            </div>

            <!-- Produto 2 -->
            <div class="product-card" data-id="2">
                <img src="https://live.staticflickr.com/3004/5791118782_415c1860ab_z.jpg" alt="Produto 2">
                <h3>Produto 2</h3>
                <p>Descrição do produto 2</p>
                <p><strong>R$ 150,00</strong></p>
                <button class="addCart btn btn-sm btn-outline-warning button-hover-background fs-6">Adicionar ao Carrinho</button>
            </div>

            <!-- Produto 3 -->
            <div class="product-card" data-id="3">
                <img src="https://i.pinimg.com/736x/58/2e/b8/582eb8ff4e402b690c5a00c0bdebf08e--chevrolet-convertible.jpg" alt="Produto 3">
                <h3>Produto 3</h3>
                <p>Descrição do produto 3</p>
                <p><strong>R$ 200,00</strong></p>
                <button class="addCart btn btn-sm btn-outline-warning button-hover-background fs-6">Adicionar ao Carrinho</button>
            </div>
        </div>
    </div>

    <!-- Carrinho -->
    <div class="cartTab">
        <h1>Carrinho</h1>
        <div class="listCart">
            <div class="item">
                <div class="image">
                    <img src="https://i.pinimg.com/736x/58/2e/b8/582eb8ff4e402b690c5a00c0bdebf08e--chevrolet-convertible.jpg" alt="">
                </div>
                <div class="name">
                    NAME
                </div>
                <div class="totalPrice">
                    $200
                </div>
                <div class="quantity">
                    <span class="minus">
                        < </span>
                            <span>1</span>
                            <span class="plus">></span>
                </div>
            </div>
        </div>
        <div class="btn">
            <button class="close">FECHAR</button>
            <button class="checkOut">Finalizar</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script>
        let iconCart = document.querySelector('.icon-cart');
        let closeCart = document.querySelector('.close');
        let body = document.querySelector('body');
        let listProductHTML = document.querySelector('.listProduct');
        let listCartHTML = document.querySelector('.listCart');
        let iconCartSpan = document.querySelector('.icon-cart span');

        let listProduct = [];
        let carts = [];

        iconCart.addEventListener('click', () => {
            body.classList.toggle('showCart');
        })
        closeCart.addEventListener('click', () => {
            body.classList.toggle('showCart');
        })

        const addDataToHTML = () => {
            listProductHTML.innerHTML = '';
            if (listProduct.length > 0) {
                listProduct.forEach(product => {
                    let newProduct = document.createElement('div');
                    newProduct.classList.add('item', 'col-lg-4', 'menu-item');
                    newProduct.innerHTML = `
                    <img class="menu-img img-fluid" src="${product.image}" alt="">
                    <h4>${product.name}</h4>
                    <p class="ingredients">${product.ingredients}</p>
                    <p class="price">$${product.price}</p>
                    <button type="button" class="btn btn-sm btn-outline-warning button-hover-background fs-6">Adicionar ao carrinho</button>
                `;
                    listProductHTML.appendChild(newProduct);
                })
            }
        }

        listProductHTML.addEventListener('click', (event) => {
            let positionClick = event.target;
            if (positionClick.classList.contains('addCart')) {
                let product_id = positionClick.parentElement.dataset.id;
                addToCart(product_id);
                // alert('Produto adicionado ao carrinho');
            }
        })

        const addToCart = (product_id) => {
            if (carts.length > 0) {
                carts = [{
                    product_id: product_id,
                    quantity: 1
                }]
            }
            console.log(carts);
        }

        const initApp = () => {
            fetch('assets/js/products.json')
                .then(response => response.json())
                .then(data => {
                    listProduct = data;
                    addDataToHTML();
                })
        }

        initApp();
    </script>
</body>

</html>