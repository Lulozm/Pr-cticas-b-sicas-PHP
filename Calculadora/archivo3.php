<?php 
  

$opc1=$_POST['op1'];
$opc2=$_POST['op2'];
$accion=$_POST['calcular'];

switch($accion){
	
case 'suma':
$R=$opc1 + $opc2;
echo "El resultado de la suma es:".$R;
break;

case 'resta':
$resta=$opc1 - $opc2;
echo "El resultado de la resta es:".$resta;
break;

case 'multi':
$multi=$opc1 * $opc2;
echo "El resultado de la multiplicacion es:".$multi;
break;

case 'div':
$div=$opc1 / $opc2;
echo "El resultado de la dividión es:".$div;
break;

case 'mod':
$modu=$opc1 % $opc2;
echo "El resultado del modulo es:".$modu;
break;
}
?>
