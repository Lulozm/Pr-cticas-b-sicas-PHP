<?php 
$h=$_POST['h'];
$r=$_POST['r'];


$ladt=sqrt(($h*$h)-($r*$r));
$at=($r*$ladt)/2;
$ats=$at*2;
$acirc=3.1416*($r*$r);
$ac=$acirc/2;
$af=$ats+$ac;

echo "El area de la figura  es: ".$af;


 ?>
