<?php
require_once 'registros/models/regmodel.php';
require_once 'registros/views/regview.php';
class RegCont{
    
    private $ObjRegModel;
    private $ObjRegView;
    
    function __construct(){
        $this->ObjRegModel = new RegModel();
        $this->ObjRegView = new RegView();
    }
    
    public function index(){
        $emailr=$_POST['emailr'];
        $pwd=sha1 ( $_POST['pwd'] );
        echo $emailr.' '.$pwd;
            $this->ObjRegModel = new RegModel();
            $this->ObjRegModel->setDatos($emailr, $pwd);
            $registro=$this->ObjRegModel->save();
             $mensaje="Se registro el usuario";
            $this->ObjRegView->mensaje($mensaje);
        
    }
    
    public function sesion(){
        $emailr=$_POST['emailr'];
        $pwd=sha1 ( $_POST['pwd'] );
        $datos=$this->ObjRegModel->sesion($emailr,$pwd);
        $renglones=mysqli_num_rows($datos);
        if($renglones==1){
            while ($renglon=mysqli_fetch_assoc($datos)){
                $_SESSION['id']=$renglon['idr'];
                $_SESSION['email']=$renglon['emailr'];
            }

            $this->ObjRegView->admin();

            }
            else{
                echo "No coincide el parametro";
            }
        }

        public function cerrarSesion(){

            session_destroy();
            unset($_GET['inicio']);
            header("Location:index.php");
        }

        
        public function lista(){
            $datos=array();
            $registros=$this->ObjRegModel->lista();

            while ($renglon=mysqli_fetch_assoc($registros)) {
                $Dict=array(
                    '{IDR}'=>$renglon['idr'],'{EMAIL}'=>$renglon['emailr'],'{CONTRASENA}'=>$renglon['contrasena']);
                array_push($datos, $Dict);
            }
            $this->ObjRegView->lista($datos);
        }


        




    }
    

?>