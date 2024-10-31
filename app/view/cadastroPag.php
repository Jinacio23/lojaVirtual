<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pagamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        } */

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        .payment-method {
            display: flex;
            gap: 10px;
        }

        .payment-method input {
            margin-right: 5px;
        }

        button {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }
    </style> -->
</head>

<body>

    <div class="container">
        <!-- <h1>Cadastro de Pagamento</h1>
        <form action="/processar-pagamento" method="post">
            <label for="nome">Nome Completo</label>
            <input type="text" id="nome" name="nome" required>

            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" required>

            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" required>

            <label for="cep">CEP</label>
            <input type="text" id="cep" name="cep" required>

            <label>Forma de Pagamento</label>
            <div class="payment-method">
                <input type="radio" id="boleto" name="forma_pagamento" value="boleto" required>
                <label for="boleto">Boleto</label>

                <input type="radio" id="pix" name="forma_pagamento" value="pix" required>
                <label for="pix">Pix</label>
            </div>

            <button type="submit">Confirmar Pagamento</button>
            <a href="recibo">Recibo</a>
        </form> -->
        <form>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Cadastro de Pagamento</h3>
                </div>

                <div class="card-body">
                    <div class="row g-3">

                        <div class="form-group col-sm-9">
                            <label for="nome_completo">Nome Completo</label>
                            <input type="text" class="form-control" id="nome_completo" placeholder="Nome">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" placeholder="CPF">
                        </div>
                        <div class="form-group col-sm-9">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" id="endereco" placeholder="Endereço">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="cep">CEP</label>
                            <input type="text" class="form-control" id="cep" placeholder="CEP">
                        </div>
                        <div class="form-group col-sm-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="boleto">
                                <label class="form-check-label">Boleto</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pix">
                                <label class="form-check-label">Pix</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-primary">Confirmar Pagamento</button>
                    </div>
                </div>
        </form>
    </div>

</body>

</html>