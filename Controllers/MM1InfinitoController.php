<?php
/*
    $Λ= $_POST['lambda'];
    $µ= $_POST['mu'];
    $N= $_POST['N'];
*/
$n1= 0.05;
$n2= 0.5;
$n3= 5;

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
            $sumatoria += ((fact($N))/(fact($N - $i))) * pow($Λ/$µ, $i);
        }
        return 1 / $sumatoria;
    }

    $L=L($n1, $n2, $n3);
    $LQ=Lq($n1, $n2, $n3);
    $Wq=Wq($n1, $n2, $n3);
    $P0=PO($n1, $n2, $n3);

    $resultado=  "L=".$L.", Lq=".$LQ.", Wq=".$Wq.",  P0=".$P0;
    $arrayJson = new stdClass();
    $arrayJson->Resultado=$resultado;
    echo json_encode($arrayJson);
?>  