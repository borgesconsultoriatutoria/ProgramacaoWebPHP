<?php
    for($i=1;$i<=10;$i++){
        $vetor[$i] = $_POST["v$i"];
    }
    $valor_mult = $_POST['valor_mult'];
    foreach($vetor as $valor){
        echo "<br/> O valor $valor multiplicado por $valor_mult é: ".($valor*$valor_mult);
    }

    $cont_pares = 0;
    foreach($vetor as $valor){
        if ($valor%2 == 0)
            $cont_pares++;
        
    }