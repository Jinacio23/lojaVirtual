<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <a href="estoque">Voltar</a>

    <div class="container">
        <form>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Cadastro de Produto</h3>
                </div>

                <div class="card-body">
                    <div class="row g-3">

                        <div class="form-group col-sm-4">
                            <label for="nome_produto">Nome</label>
                            <input type="text" class="form-control" id="nome_produto" placeholder="Nome do produto">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="quantidade">Quantidade</label>
                            <input type="text" class="form-control" id="quantidade" placeholder="Quantidade">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="produto_valor">Valor</label>
                            <input type="text" class="form-control" id="produto_valor" placeholder="Valor do produto">
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Descrição</label>
                            <textarea class="form-control" rows="3" placeholder="Descrição aqui"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="produto_imagem">Imagem</label>
                            <div class="input-group mt-2">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="produto_imagem">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <button type="submit" class="btn btn-danger float-end">Cancelar</button>
                </div>
        </form>
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>