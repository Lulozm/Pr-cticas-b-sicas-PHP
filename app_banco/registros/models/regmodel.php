<?php
    require_once 'conexion/conexion.php';
class RegModel{
    
    private $idr;
    private $emailr;
    private $contrasena;
    
    function __construct(){
        $this->idr=0;
        $this->emailr='';
        $this->contrasena='';
    }
    public function setDatos($emailr, $pwd){
        $this->emailr=$emailr;
        $this->contrasena=$pwd;
    }
    public function save(){
        if($this->idr==0){
            try{
             $sql="insert into registro(idr,emailr,contrasena) values('','".$this->emailr."','".$this->contrasena."')";

            }catch(Exception $e){
                echo "Error en la consulta".$e->getMessage();   
            }
            $registro=$this->aplicarQry($sql);
            return $registro;
        }
    }

    public function sesion($emailr,$pwd){
        try{
            $sql="select idr, emailr from registro where emailr='$emailr' and contrasena='$pwd'";
            $registro=$this->aplicarQry($sql);
            
            return $registro;
        } catch(Exception $e){
            echo "Error en la consulta".$e->getMessage();
        }
        
    }

    public function lista(){
        try{
            $sql="select*from registro";
            $registros=$this->aplicarQry($sql);
            return $registros;
        }catch (Exception $e) { echo "error en el select".$e->getMessage();}
        }

         
    



    public function aplicarQry($sql){
        $ObjConexion = new conexion();
        $registro=$ObjConexion->ejecutarConsulta($sql);
        $ObjConexion->cerrar();
        return $registro;
        
        
        
    }
    
}
?>
