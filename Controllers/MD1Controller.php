<?php

    $µ = $_POST['miu'];

    $λ = $_POST['lamba'];

    $operacion = $_POST['operacion'];

    if($operacion=="longitudPromedioCola"){
        echo(longitudPromedioCola($µ, $λ));

    }else if($operacion=="tiempoEsperaPromedioCola"){
        echo(tiempoEsperaPromedioCola($µ, $λ));

    }else if($operacion=="numeroPromedioClientesSistema"){
        echo(numeroPromedioClientesSistema($µ, $λ));
        
    }else if($operacion=="tiempoPromedioEnSistema"){
        echo(tiempoPromedioEnSistema($µ, $λ));
    }

    function longitudPromedioCola($µ, $λ){

        $result = pow($λ, 2)/(2*$µ*($µ-$λ));

        return $result;

    }

    function tiempoEsperaPromedioCola($µ, $λ){

        $result = $λ/(2*$µ*($µ-$λ));

        return $result;

    }

    function numeroPromedioClientesSistema($µ, $λ){

        $result =  longitudPromedioCola($µ, $λ) + ($λ/$µ);

        return $result;

    }

    function tiempoPromedioEnSistema($µ, $λ){

        $result =  tiempoEsperaPromedioCola($µ, $λ) + ( 1 / $µ);

        return $result;

    }


?>