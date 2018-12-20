<?php 

$ancho=$_POST['ancho'];
$largo=$_POST['largo'];
$alto=$_POST['alto'];
$tipof=$_POST['tipof'];


switch($tipof){
	
case 'cubo':
$v= $ancho*$alto*$largo;
echo "El volumen del cubo es: ".$v;
break;

case 'prisma':
$v= $ancho*$alto*$largo;
echo "El volumen del prisma es: ".$v;
break;

case 'piramide':
$v=(($ancho*$largo)/2)*$alto;
echo "El area de la pirámide es: ".$v;
break;

default: echo"Elija una opción válida";
break;

}