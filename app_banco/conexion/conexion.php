<?php
require_once'DatoServidor.php';
class conexion{
    private $conectar;
    function __construct(){
        //crear un objeto de la clase DatoServidor
        $ObjServidor=new DatoServidor();
        //primer funcion de base de datos
        try{
			
            $this->conectar =new mysqli($ObjServidor->getSv(), $ObjServidor->getUs(), $ObjServidor->getPa(), $ObjServidor->getDb());
        }catch(Exception $e){
            echo "No se logro la conexion por: ".$e->getMessage()."<br>";
        }
    }
    
    public function ejecutarConsulta($sql){
        try{
			
            $registro= $this->conectar->query($sql);
           
            return $registro;
        }catch(Exception $e){
            echo "No se logro consulta".$e->getMessage()."<br>";
        }
        
    }
    
    public function cerrar(){
        mysqli_close($this->conectar);
    }
}
?>
