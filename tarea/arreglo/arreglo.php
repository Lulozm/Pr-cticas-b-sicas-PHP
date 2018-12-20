<?php

//arreglos sencillos
//forma1
$dias[]="Lunes";
$dias[]="Martes";
$dias[]="Miercoles";
$dias[]="Jueves";
$dias[]="Viernes";
$dias[]="Sabado";
$dias[]="Domingo";


for($i=0;$i<count($dias); $i++){

echo $dias[$i];
echo "<br>"."<br>";

}

//forma2
$nombres=array('Xiadani','Jose','Israel');
echo "La posicion 0 del arreglo es:". $nombres[0]."<br>"; //solo un valor en cierta posicion

for($i=0;$i<count($nombres); $i++){
echo "<br>";
echo $nombres[$i];
echo "<br>";

}



//asociativos
echo "<h1>Arreglos asociativos</h1>";

$persona['id']="16001390";
$persona['apellido']="Torres";
$persona['tel']="7712287475";


foreach($persona as $key => $value){
 echo $persona[$key];


}
?>
