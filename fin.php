<?php 
for ($i=0; $i < 153; $i++) { 
	$nombre = "c$i";
	if (isset($_GET[$nombre])) {
		$imprimir = $_GET[$nombre];
		echo $imprimir."<br>";
	}else{
		$imprimir ="";
		echo $imprimir."";
	}
	
}
 ?>