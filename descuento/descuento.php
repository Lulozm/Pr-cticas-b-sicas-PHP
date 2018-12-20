<?php 
extract($_POST);
$pagina=file_get_contents('descuento.html');
if(isset($_POST['camisa'])and isset($_POST['prec'])and$_POST['camisa']>=3){
$sub=$_POST['prec']*$_POST['camisa'];
$des=$sub*.25;
$total=$sub-$des;

$mensaje="Tu subtotal es : ".$sub."<br>"."Tu  descuento sería de: ".$des."<br>"." Tu total es de :".$total;
$paginaf=str_replace('{MENSAJE}',$mensaje,$pagina);

print($paginaf);

}
else{
	$sub=$_POST['prec']*$_POST['camisa'];
	$mensaje="Tu total es: ".$sub."<br>"."No cuentas con ningún descuento";
	$paginaf=str_replace('{MENSAJE}',$mensaje,$pagina);

print($paginaf);
}

?>

