<?php
class RegView{
    public function index(){
        $pagina = file_get_contents('public_html/login.html');
        $paginaf = str_replace('{MENSAJE}','',$pagina);
        print($paginaf);
        
    }
     public function registro(){
        $pagina = file_get_contents('public_html/registro.html');
        print($pagina);
    }
    public function mensaje($mensaje){
        
        $pagina = file_get_contents('public_html/template.html');
        $paginaf = str_replace('{MENSAJE}',$mensaje,$pagina);
        print($paginaf);
    }

    public function admin(){
        if(isset($_SESSION['email'])){
            header("Location:public_html/Administrador.php");
            exit;
        }
    }

    public function lista($datos){
        $pagina=file_get_contents('public_html/lista.php');
        $pos1=strpos($pagina,'<!--LISTA-->');
        $pos2=strrpos($pagina,'<!--LISTA-->');
        $longitud=$pos2-$pos1;
        $match=substr($pagina, $pos1,$longitud);
        $render='';
        foreach ($datos as $i => $Dict) {
            $render.=str_replace(array_keys($Dict),array_values($Dict),$match);
        }
        $pagina=str_replace($match, $render,$pagina);
        print($pagina);
        


    }

    public function listac($datos){
        $pagina=file_get_contents('public_html/listac.php');
        $pos1=strpos($pagina,'<!--LISTA1-->');
        $pos2=strrpos($pagina,'<!--LISTA1-->');
        $longitud=$pos2-$pos1;
        $match=substr($pagina, $pos1,$longitud);
        $render='';
        foreach ($datos as $i => $Dict) {
            $render.=str_replace(array_keys($Dict),array_values($Dict),$match);
        }
        $pagina=str_replace($match, $render,$pagina);
        print($pagina);
        


    }



}
?>