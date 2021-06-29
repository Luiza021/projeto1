<?php
class Conecta {
    private stactic $url  = "localhost:3306";
    private stactic $user = "root";
    private  stactic $passaword = "senac";
    private stactic $base = "dbphp01";
    public $db;

    public function(){
        $db = $this->conectadb;
    }
  
    public function conectadb(){
        return mysqli_connect($this->getUrl(),$this->getPassaword(),
        $this->getBase()) or die (mysqli_errno($link)); 
    }

    function getUrl(){
            return $this->url;
    }

    function getUser(){
        return $this->user;
    }
    
}