<?php 


$sub=$_POST['sub'];



$iva= $sub*.16;
echo "Tu iva es: $".$iva;  
$total= $sub+$iva;
echo "<br>"."Tu total es: $".$total;


 ?>