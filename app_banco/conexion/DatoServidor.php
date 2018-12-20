<?php
//Establece los datos para conectar con el servidor DatoServidor.php

class DatoServidor{
    
    private $sv='localhost';
    private $us='root';
    private $pa='';
    private $db="db_banco";
    
    public function getSv(){
        return $this->sv;
    } 
    
    public function getUs(){
        return $this->us;
    }
    
    public function getPa(){
        return $this->pa;
    }
    
    public function getDb(){
        return $this->db;
    } 
}
?>
