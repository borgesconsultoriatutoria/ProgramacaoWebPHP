<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Sistema</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Registros de Categorias</a></li>
                        <li><a class="dropdown-item" href="#">Nova Categoria</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Produtos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Registros de Produtos</a></li>
                        <li><a class="dropdown-item" href="#">Novo Produto</a></li>
                    </ul>
                </li>
            </ul>
        </div>
       </div>
    </nav>
    <main class="container">
        <h1>Novo Produto</h1>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">
                    Informe o nome:
                </label>
                <input type="text" class="form-control" 
                    name="nome" id="nome"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="preco" class="form-label">
                    Informe o preço:
                </label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">R$</span>
                        <input type="number" class="form-control" 
                            name="preco" id="preco"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="categoria" class="form-label">
                    Selecione a categoria:
                </label>
                <select name="categoria" id="categoria" class="form-select">
                    <option value=""></option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-secondary">
                    Inserir
                </button>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>