


















































<?php 

$base=$_POST['base'];
$altura=$_POST['altura'];
$tipof=$_POST['tipof'];


switch($tipof){
	
case 'triangulo':
$a=($base*$altura)/2;
echo "El area es: ".$a;
break;

case 'rectangulo':
$a=$base*$altura;
echo "El area es: ".$a;
break;

case 'cuadrado':
$a=$altura*$altura;
echo "El area es: ".$a;
break;

default: echo"Elija una opción válida";
break;

}








?>
