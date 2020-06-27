<?php
 $µ = $_GET['mu'];

 $λ = $_GET['lambda'];
 
 $m=$_GET['m'];

 function RO($λ,$m,$µ){
     return $λ/($m*$µ);
 }
 function PO($λ,$m,$µ){
   $sumatoria=0;
   $a=$m-1;
   for ($n = 0; $n < $m ; $n++){ 
         $sumatoria+=(1/fact($n))*pow($λ/$µ,$n);
     }
  return 1/($sumatoria+((1/fact($m))*pow($λ/$µ,$m)*(($m*$µ)/(($m*$µ)-$λ))));
 }

 function Wq($µ, $λ, $m){
     return Lq($µ, $λ, $m)/$λ;

 }

 function W($µ, $λ,$m){
     return L($µ, $λ, $m)/$λ;

 }

 function Lq($µ, $λ,$m){
     return L($µ, $λ, $m)-($λ/$µ);

 }

 function L($µ, $λ,$m){
     $a=$m-1;
     return (($λ*$µ*pow($λ/$µ,$m))/(fact($a)*pow($m*$µ-$λ,2)))*PO($λ,$m,$µ)+($λ/$µ);

 }
 function fact($numero){ 
     $factorial = 1; 
     for ($i = 1; $i <= $numero; $i++){ 
       $factorial = $factorial * $i; 
     } 
     return $factorial; 
 }
 $L=L($µ, $λ,$m);
 $W=W($µ, $λ,$m);
 $LQ=Lq($µ, $λ,$m);
 $Wq=Wq($µ, $λ, $m);
 $Ro=RO($λ,$m,$µ);
 $P0=PO($λ,$m,$µ);

 $resultado=  "L=".$L.", Lq=".$LQ.", Wq=".$Wq.", W=".$W.", RO=".$Ro.", P0=".$P0;
 $arrayJson = new stdClass();
 $arrayJson->Resultado=$resultado;
 echo json_encode($arrayJson);

?>