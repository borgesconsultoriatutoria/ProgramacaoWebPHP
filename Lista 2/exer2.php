<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 2 - Exercício 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container mt-3">
    <form action="exer2_resp.php" method="POST">
        <div class="row">
            <?php
                for($i=1; $i<=7; $i++){
            ?>
                <div class="col">
                    <label for="valor<?= $i ?>" class="form-label">
                        Informe o <?= $i ?>º valor
                    </label>
                    <input type="number" name="valor<?= $i ?>" id="valor<?= $i ?>" 
                        class="form-control"/>
                </div>
            <?php
                }
            ?>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-danger">Ok</button>
            </div>
        </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>