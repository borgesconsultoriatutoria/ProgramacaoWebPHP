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
        <h1>Categorias Registradas</h1>
        <table class="table table-striped table-hover">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Descrição</td>
                    <td>
                        <a class="btn btn-outline-info">Consultar</a>
                        <a class="btn btn-outline-warning">Alterar</a>
                        <a class="btn btn-outline-danger">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Descrição</td>
                    <td>
                        <a class="btn btn-outline-info">Consultar</a>
                        <a class="btn btn-outline-warning">Alterar</a>
                        <a class="btn btn-outline-danger">Excluir</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Descrição</td>
                    <td>
                        <a class="btn btn-outline-info">Consultar</a>
                        <a class="btn btn-outline-warning">Alterar</a>
                        <a class="btn btn-outline-danger">Excluir</a>
                    </td>
                </tr>
            </tbody>
            </table>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>