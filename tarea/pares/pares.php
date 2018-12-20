<?php
$pagina=file_get_contents('pares.html');
$render='';
$conta=0;
$suma=0;
for($i=0;$i<100;$i++){
$jugo=$i % 2;
if ($jugo==0) {
	$conta=$conta+1;
	$suma=$suma+$i;
	$render.=$i."<br>";
}



} 
echo "<h4>Los numeros pares son:</h4>".$conta;
echo "<h4>La suma es:</h4>".$suma;
$paginaf=str_replace('{ir}',$render,$pagina);
print($paginaf);


?>
