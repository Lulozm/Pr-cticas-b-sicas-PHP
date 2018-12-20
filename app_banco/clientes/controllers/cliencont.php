<?php
require_once 'clientes/models/clienmodel.php';
require_once 'clientes/views/clienview.php';
class ClienCont{
    
    private $ObjClienModel;
    private $ObjClienView;
    
    function __construct(){
        $this->ObjClienModel = new ClienModel();
        $this->ObjClienView = new ClienView();
    }
    
    public function index(){
        $nombrec=$_POST['nombrec'];
        $ciudadc=$_POST['ciudadc'];
        $callec=$_POST['callec'];
        $registro=$_POST['registro'];
        echo $registro;
       // echo $nombrec.' '.$ciudadc.' '.$callec.' '.$registro;
            $this->ObjClienModel = new ClienModel();
            $this->ObjClienModel->setDatos('',$nombrec,$ciudadc,$callec,$registro);
            $cliente=$this->ObjClienModel->save();
             $mensaje="Se registraron los datos del cliente";
            $this->ObjClienView->mensaje($mensaje);
        
    }
    public function lista(){
            $datos=array();
            $registros=$this->ObjClienModel->listac();

            while ($renglon=mysqli_fetch_assoc($registros)) {
                $Dict=array(
                    '{IDC}'=>$renglon['idc'],'{NOMBREC}'=>$renglon['nombrec'],'{CIUDADC}'=>$renglon['ciudadc'],'{CALLEC}'=>$renglon['callec']);
                array_push($datos, $Dict);
            }
            $this->ObjClienView->lista($datos);
        }
    
    public function borrar($id){

       $registro=$this->ObjClienModel->borrar($id);
      if($registro==1){
         $this->lista();
            echo "registro eliminado";
        }
    }


    public function seleccion(){
            $registros=$this->ObjClienModel->seleccion();
            $clientes=array();
             while($renglon=mysqli_fetch_assoc($registros)){
                    $Dict=array(
                        '{IDC}'=>$renglon['idc'],
                        '{NOMBREC}'=>$renglon['nombrec']);  
                    array_push($clientes,$Dict);
                } 
                           
           $this->ObjClienView->seleccion($clientes);
            
       }

    public function actualizar(){
        $idc=$_POST['idc'];
        echo $idc;
        $nombrec=$_POST['nombrec'];
        $ciudadc=$_POST['ciudadc'];
        $callec=$_POST['callec'];

        $this->ObjClienModel->update ($idc,$nombrec,$callec,$ciudadc);
        $this->lista();
        }
    

    
}
?>