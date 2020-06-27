<?php

    $µ = $_GET['mu'];

    $λ = $_GET['lambda'];

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
    $Lq=(longitudPromedioCola($µ, $λ));

    $Wq=(tiempoEsperaPromedioCola($µ, $λ));

    $L=(numeroPromedioClientesSistema($µ, $λ));

    $W=(tiempoPromedioEnSistema($µ, $λ));

    $resultado=  "L=".$L.", Lq=".$Lq.", Wq=".$Wq.", W=".$W;
		$arrayJson = new stdClass();
		$arrayJson->Resultado=$resultado;
		echo json_encode($arrayJson);


?>