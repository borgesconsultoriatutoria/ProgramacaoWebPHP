<?php
    $nome = $_POST["nome"];
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $nome = $valor1 + $valor2;
    if ($nome < 10)
        $valor = 0;
    else   
        $valor = 1;
    //Operador Ternário
    $valor = ($nome < 10) || ($nome == 0) ? 0 : 1;

    echo "Seja bem vindo $nome - O total da soma é $soma";