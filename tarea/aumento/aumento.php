<?php 

$ant=$_POST['ant'];
$cat=$_POST['cat'];


switch($cat){
	
           
        
case '1':
$aum=$ant*.15;
$suel=$ant+$aum;
echo "Su categoría es: 1 "."<br>"."Su nuevo sueldo es: $".$suel;
break;

case '2':
$aum=$ant*.10;
$suel=$ant+$aum;
echo "Su categoría es: 2 "."<br>"."Su nuevo sueldo es: $".$suel;
break;
        
case '3':
$aum=$ant*.08;
$suel=$ant+$aum;
echo "Su categoría es: 3 "."<br>"."Su nuevo sueldo es: $".$suel;
break;

case '4':
$aum=$ant*.07;
$suel=$ant+$aum;
echo "Su categoría es: 4 "."<br>"."Su nuevo sueldo es: $".$suel;
break;

default: echo"Elija una opción válida";
break;

}