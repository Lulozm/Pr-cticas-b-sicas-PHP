<?php 
extract($_POST);
$pagina=file_get_contents('galon.html');

$galv=$_POST['ven']/3.785;

if(isset($_POST['ven'])and$galv>=100){


$gan=$_POST['gal']*$galv;
$aum=$gan*.25;
$aumt=$gan+$aum;
$mensaje="Tu ganancia total es de: $".$aumt;
$paginaf=str_replace('{MENSAJE}',$mensaje,$pagina);

print($paginaf);

}
else{
$gan=$_POST['gal']*$galv;
    $mensaje="Tu ganancia total es de: $".$gan;
$paginaf=str_replace('{MENSAJE}',$mensaje,$pagina);

print($paginaf);
}

?>