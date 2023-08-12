<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="container">
    <?php
        //este é um comentário
        /*
            Comentário
            em
            bloco
        */
        #comentário
    ?>
    Olá, hoje é <?php echo date("d"); ?> de Agosto de <?= date("Y") ?>. 
    <?php 
        $hora = date("H:i");
        echo 'Hora atual: '.$hora; 
    ?>
    <form method="POST" action="bemvindo.php">
        <div class="col">
            <div class="row">
                <label for="nome" class="form-label">
                    Informe seu nome:
                </label>
                <input class="form-control" id="nome" name="nome" type="text"/>
                <button class="btn btn-primary" type="submit">
                    Enviar
                </button>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>