<?php
$num=$_POST['num'];
$pagina=file_get_contents('ciclos.html');
$render='';
for($i=1;$i<=10;$i++){
$r=$num*$i;
$render.=$num.'x'.$i.'='.$r.'<br>';

} 
$paginaf=str_replace('{FOR}',$render,$pagina);
print($paginaf);


?>
