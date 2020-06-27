<?php

		$Λ= $_GET['lambda'];
		$M= $_GET['mu'];
		$k= $_GET['k'];

		$L=($Λ/($M-$Λ));
		$W=(1*($M-$Λ));
		$Lq=((pow($Λ,2))/($M*($M-$Λ)));
		$Wq=($Λ/($M/($M-$Λ)));
		$Ro=$Λ/$M;
		$P0=1-($Λ/$M);
		$pn_k=(pow(($Λ/$M),($k+1)));


		$resultado=  "L=".$L.", W=".$W.", Lq=".$Lq.", Wq=".$Wq.", Ro=".$Ro.", P0=".$P0." Pn>k=".$pn_k;
		$arrayJson = new stdClass();
		$arrayJson->Resultado=$resultado;
		echo json_encode($arrayJson);
?>