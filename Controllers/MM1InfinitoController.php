<?php

    $Λ= $_GET['lambda'];
    $µ= $_GET['mu'];
    $N= $_GET['N'];

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
    function W($Λ, $µ, $N){
        return Wq($Λ, $µ, $N)+(1/$µ);
    }

    function PO($Λ, $µ, $N){
        $sumatoria=0;
        for ($i = 0; $i <= $N ; $i++){ 
            $sumatoria += ((fact($N))/(fact($N - $i))) * pow($Λ/$µ, $i);
        }
        return 1 / $sumatoria;
    }

    $L=L($Λ, $µ, $N);
    $W = W($Λ, $µ, $N);
    $LQ=Lq($Λ, $µ, $N);
    $Wq=Wq($Λ, $µ, $N);
    $P0=PO($Λ, $µ, $N);

    $resultado=  "L=".$L.", W=".$W.", Lq=".$LQ.", Wq=".$Wq.",  P0=".$P0;
    $arrayJson = new stdClass();
    $arrayJson->Resultado=$resultado;
    echo json_encode($arrayJson);
?>  