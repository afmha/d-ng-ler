<?php

	function bol($a,$b,$c=False){
		$z = 0;
		if($c == True){
			
			while($a > 0){
				$a = $a - $b;
				$z = $z + 1;
				if($a <= 0){
					$z = $z - 1;
					echo "Sonuç ".$z."<br>";
					if($a < 0){
						$d = $a + $b;
						echo 'Kalan '.$d."<br>";
					}
				}
			}
			
		}
		else
		{
			
			while($a > 0){
				$a = $a - $b;
				$z = $z + 1;
				if($a <= 0){
					echo "Sonuç ".$z."<br>";
				}
			}
			
		}

	}
	
	//Örnek
	
	bol(50,4,True);

?>
