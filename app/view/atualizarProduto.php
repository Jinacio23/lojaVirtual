<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Produto</title>
</head>

<body>
    <h1>Atualizar Produto</h1>

    <form action='<?php echo "../estoque-update/$id[0]"; ?>' method="post">
         <!-- Campo Nome -->
         <label for="nome">Nome do produto</label>
            <input type="text" id="nome" name="name" value="<?php echo htmlspecialchars($dados[1]); ?>" required>

            <!-- Campo CPF -->
            <label for="estoque">Qtd. estoque</label>
            <input type="number" id="estoque" name="estoque" value="<?php echo htmlspecialchars($dados[4]); ?>" required>

            <!-- Campo Endereço -->
            <label for="preco">Preço</label>
            <input type="text" id="preco" name="preco" value="<?php echo htmlspecialchars($dados[3]); ?>" required>

            <!-- Campo CEP -->
            <label for="description">Descrição</label>
            <input type="text" id="description" name="description" value="<?php echo htmlspecialchars($dados[2]); ?>" required>

           
                <button>Atualizar</button>
           
    </form>
    <a href="../estoque">Voltar</a>
</body>

</html> 