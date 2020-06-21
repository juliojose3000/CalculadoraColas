<?php

		$Λ= $_POST['lambda'];
		$M= $_POST['mu'];
		$k= $_POST['k'];

		$L=($Λ/($M-$Λ));
		$W=(1*($M-$Λ));
		$Lq=((pow($Λ,2))/($M*($M-$Λ)));
		$Wq=($Λ/($M/($M-$Λ)));

			echo "L=". $L. "\n";
            echo "W= " .$W;
            echo "Lq= ". $Lq;
            echo "Wq= ". $Wq;
?>