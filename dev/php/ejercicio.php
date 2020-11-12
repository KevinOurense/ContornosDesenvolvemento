<?php	 
	//Falla en Windows 
 	//$numero1 = readline("Introduza un número: ");  
 	//$numero2 = readline("Introduza un número: "); 
 	echo "Introduza un número: "; 
 	$numero1 = stream_get_line(STDIN, 1024, PHP_EOL); 
 	echo "Introduza un número: "; 
 	$numero2 = stream_get_line(STDIN, 1024, PHP_EOL); 
 	echo "La división de " . $numero1 . "/" . $numero2 . " = " . ($numero1/$numero2); 
 ?> 
