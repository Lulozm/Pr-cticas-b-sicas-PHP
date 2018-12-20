<?php
class ClienView{
    public function index(){
        $pagina = file_get_contents('public_html/login.html');
        $paginaf = str_replace('{MENSAJE}','',$pagina);
        print($paginaf);
        
    }
    
    public function cliente(){
        $pagina = file_get_contents('public_html/cliente.html');
        print($pagina);
    }
    public function mensaje($mensaje){
        
        $pagina = file_get_contents('public_html/template.html');
        $paginaf = str_replace('{MENSAJE}',$mensaje,$pagina);
        print($paginaf);
    }
     public function lista($datos){
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
    public function seleccion($clientes){
        $pagina=file_get_contents('public_html/seleccion.php');
        $pos1=strpos($pagina,'<!--SELECT-->');
        $pos2=strrpos($pagina,'<!--SELECT-->');
        $longitud=$pos2-$pos1;
        $match=substr($pagina, $pos1, $longitud);
        $render='';
        foreach ($clientes as $i => $Dict) {
            $render.=str_replace(array_keys($Dict),array_values($Dict),$match);
        }
        $pagina=str_replace($match, $render,$pagina);
        print($pagina);
        


    }

public function updatec($id){
        $pagina=file_get_contents('public_html/updatecliente.php'); 
        $pagina=str_replace('{ID}',$id, $pagina);
        print($pagina); 
        
    } 

}
?>