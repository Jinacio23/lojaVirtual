<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 40px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="email"], input[type="date"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }
        button {
            padding: 15px;
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
    </style>
</head>
<body>

    <div class="container">
        <h1>Cadastro de Cliente</h1>
        <form action="/cadastrar-cliente" method="post">
            <!-- Campo Nome -->
            <label for="nome">Nome Completo</label>
            <input type="text" id="nome" name="nome" required>

            <!-- Campo CPF -->
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" required>

            <!-- Campo Data de Nascimento -->
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>

            <!-- Campo Email -->
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <!-- Campo Endereço -->
            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" required>

            <!-- Campo CEP -->
            <label for="cep">CEP</label>
            <input type="text" id="cep" name="cep" required>

            <!-- Botão de Enviar -->
            <button type="submit">Cadastrar</button>
        </form>
    </div>

</body>
</html>
