<?php

    $Λ= $_POST['lambda'];
    $µ= $_POST['mu'];
    $N= $_POST['N'];


    function fact($numero){ 
        $factorial = 1; 
        for ($i = 1; $i <= $numero; $i++){ 
          $factorial = $factorial * $i; 
        } 
        return $factorial; 
    }

    function L($Λ, $µ, $N){
        return Lq($Λ, $µ, $N)+(1-PO($Λ, $µ, $N));
    }

    function Lq($Λ, $µ, $N){
        return $N - (($Λ+$µ)/$Λ) * (1 - PO($Λ, $µ, $N));
    }

    function Wq($Λ, $µ, $N){
        return Lq($Λ, $µ, $N)/(($N - L($Λ, $µ, $N)) * $Λ);
    }

    function PO($Λ, $µ, $N){
        $sumatoria=0;
        for ($i = 0; $i <= $N ; $i++){ 
            $sumatoria += ((fact($i))/(fact($N - $i))) * pow($Λ/$µ, $i);
        }
        return 1 / $sumatoria;
    }

    $L=L($µ, $λ,$m);
    $LQ=Lq($µ, $λ,$m);
    $Wq=Wq($µ, $λ, $m);
    $P0=PO($λ,$m,$µ);

    $resultado=  "L=".$L.", Lq=".$LQ.", Wq=".$Wq.",  P0=".$P0;
    $arrayJson = new stdClass();
    $arrayJson->Resultado=$resultado;
    echo json_encode($arrayJson);

?>  