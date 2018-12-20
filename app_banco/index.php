<?php
    session_start();
    require_once'registros/views/regview.php';
    require_once'registros/controllers/regcont.php';
    require_once'clientes/controllers/cliencont.php';
    require_once'clientes/views/clienview.php';
    require_once'clientes/models/clienmodel.php';

    $ObjRegistro = new RegView();
    $ObjRegCont = new RegCont();
    $ObjCliente= new ClienView();
    $ObjClienCont = new ClienCont();
    $ObjClienModel = new ClienModel();

    if(!isset($_GET['inicio'])){
        $ObjRegistro->index();
    
    }

if(isset($_GET['inicio'])&& $_GET['inicio']==2){
        $ObjRegistro->registro();
        
    }
    if(isset($_GET['inicio'])&& $_GET['inicio']==3){
        $ObjCliente->cliente();
        
    }
    
    if(isset($_GET['inicio'])&& $_GET['inicio']==4){
        $ObjRegCont->cerrarSesion();
        
    }

    if(isset($_GET['inicio'])&& $_GET['inicio']==5){
        $ObjRegCont->lista();
     }
     if(isset($_GET['inicio'])&& $_GET['inicio']==6){
        $ObjClienCont->lista();
        
     }
    if(isset($_GET['inicio'])&& $_GET['inicio']==7){
        $id=$_GET['id'];
        $ObjClienCont->borrar($id);

     }
     if (isset($_GET['cle'])&& $_GET['cle']==1) {
         $ObjClienCont->seleccion();
     }

   
    





    if(isset($_POST['accion'])){
        switch($_POST['accion']){
                
                case'registrarse':
                    $ObjRegCont->index();
                break;
                case 'Almacenar Cliente':
                $ObjClienCont->index();
                
                break;

                case 'Login':
                $ObjRegCont->sesion();
                break;

                case 'buscar':
                $ObjCliente->updatec($_POST['cliente']);
                    break;

                case 'actualizar':
                    $ObjClienCont->actualizar();
                    break;
               
                default: echo "Elige una opcion valida";
                break;

        }

        
    }
?>

