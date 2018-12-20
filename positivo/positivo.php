<?php 
extract($_POST);
$pagina=file_get_contents('positivo.html');
if(isset($_POST['num1'])and$_POST['num1']>=0){

$mensaje="El numero es positivo";
$paginaf=str_replace('{MENSAJE}',$mensaje,$pagina);

print($paginaf);

}
else{
	$mensaje="El numero es negativo";
$paginaf=str_replace('{MENSAJE}',$mensaje,$pagina);

print($paginaf);
}

?>
