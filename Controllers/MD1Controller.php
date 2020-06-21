<?php

    /*$µ = 12;
    $λ = 8;

    echo(longitudPromedioCola($µ,$λ));
    echo("\n");
    echo(tiempoEsperaPromedioCola($µ,$λ));
    echo("\n");
    echo(numeroPromedioClientesSistema($µ,$λ));
    echo("\n");
    echo(tiempoPromedioEnSistema($µ,$λ));*/

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