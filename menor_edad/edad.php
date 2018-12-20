<?php 
extract($_POST);
$pagina=file_get_contents('edad.html');
if(isset($_POST['anios'])and$_POST['anios']>=18){

$mensaje="Eres mayor de edad";
$paginaf=str_replace('{MENSAJE}',$mensaje,$pagina);

print($paginaf);

}
else{
	$mensaje="No eres mayor de edad";
	$paginaf=str_replace('{MENSAJE}',$mensaje,$pagina);

print($paginaf);
}

?>
