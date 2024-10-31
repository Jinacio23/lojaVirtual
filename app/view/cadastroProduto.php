<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>

<body>
    <h1>Cadastro de Produto</h1>

    <form action="estoque-store" method="post">
         <!-- Campo Nome -->
         <label for="nome">Nome do produto</label>
            <input type="text" id="nome" name="name" required>

            <!-- Campo CPF -->
            <label for="estoque">Qtd. estoque</label>
            <input type="number" id="estoque" name="estoque" required>

            <!-- Campo Endereço -->
            <label for="preco">Preço</label>
            <input type="text" id="preco" name="preco" required>

            <!-- Campo CEP -->
            <label for="description">Descrição</label>
            <input type="text" id="description" name="description" required>

            
                <button>Cadastrar</button>
           
    </form>
    <a href="estoque">Voltar</a>
</body>

</html> 