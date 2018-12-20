<?php
    require_once 'conexion/conexion.php';
class ClienModel{
    
    private $idc;
    private $nombrec;
    private $callec;
     private $registro;
    
    function __construct(){
        $this->idc=0;
        $this->nombrec='';
        $this->callec='';
        $this->registro='';
    
    }
    public function setDatos($idc, $nombrec,$ciudadc,$callec,$registro){
        $this->idc=$idc;
        $this->nombrec=$nombrec;
        $this->ciudadc=$ciudadc;
        $this->callec=$callec;
        $this->registro=$registro;

    }
    public function save(){
        if($this->idc==0){
            try{
             $sql="insert into cliente(nombrec,ciudadc,callec,registro) 
                values('".$this->nombrec."','".$this->ciudadc."','".$this->callec."',".$this->registro." )";
            }catch(Exception $e){
                echo "Error en la consulta".$e->getMessage();   
            }
            $cliente=$this->aplicarQry($sql);
            return $cliente;
        }
    }
    public function listac(){
        try{
            $sql="select*from cliente";
            $registros=$this->aplicarQry($sql);
            return $registros;
        }catch (Exception $e) { echo "error en el select".$e->getMessage();}
        }

    public function borrar($id){
        try{
            $sql="delete  from cliente where idc=$id";

            $registro=$this->aplicarQry($sql);
            return $registro;
        }catch (Exception $e){echo "Error en la consulta". $e->getMessage();}
        }

        public function seleccion(){
        try{
                $sql="select idc,nombrec  from cliente";
                 $registro=$this->aplicarQry($sql);
            return $registro; 
            }catch(Exception $e){echo "Error en la consulta". $e->getMessage();
            }
    }

        public function update ($idc,$nombrec,$callec,$ciudadc){
            try{
                $sql="update cliente set nombrec='$nombrec',callec='$callec', ciudadc='$ciudadc' where idc=$idc";
                $registro=$this->aplicarQry($sql);
                echo $sql;
                return $registro;
            }catch(Exception $e){
                echo"Error en la consulta".$e->getMessage();

            
            }
        }


    
    public function aplicarQry($sql){
        $ObjConexion = new conexion();
        $cliente=$ObjConexion->ejecutarConsulta($sql);
        $ObjConexion->cerrar();
        return $cliente;
        
    }


    
}
?>
