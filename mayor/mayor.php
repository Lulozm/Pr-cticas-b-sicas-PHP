<?php 
extract($_POST);
$pagina=file_get_contents('mayor.html');
if(isset($_POST['num1'])and isset($_POST['num2'])and$_POST['num1']>$_POST['num2'] ){

$mensaje="El numero mas grande es:".$_POST['num1'];
$paginaf=str_replace('{MENSAJE}',$mensaje,$pagina);

print($paginaf);

}
else{
	$mensaje="El numero mas grande es:".$_POST['num2'];
	$paginaf=str_replace('{MENSAJE}',$mensaje,$pagina);

print($paginaf);
}

?>
