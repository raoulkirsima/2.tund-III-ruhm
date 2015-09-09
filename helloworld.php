<?php
	$first_name = "Raoul";
	$last_name = "Kirsima";
	echo $first_name." ".$last_name;
?>
<br>
<?php

	$age = 19;
	
	//testib loogikat, juhul kui vanus on väikesm kui 18, siis kirjuta ""alaealine""
	//muul juhul "täisealine"
	
	//if'i sisse loogikatehe
	if($age < 18) {
		//tõene
		
		echo "alaealine";
	} else {
		//väär
		
		echo "täisealine";
		
	}
	
?>
<br>
<?php

	//vastavalt vanusele trükime nii mitu korda välja sõna "palju"
	
	for($i = 0; $i < $age; $i = $i + 1) {
			
			//tegevus mis kordub
			echo "palju".$i." ";
			
	}

	echo "õnne!"

?>
<br>
<?php

	//trüki välja kuupäev kujul: nädalapäev, kuupäev, kuu, aasta
	echo date ("l, j. F, Y, e")




?>