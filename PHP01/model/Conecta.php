<?php
class Conecta {
    private static $url  = "localhost:3306";
    private static $user = "root";
    private  static $password = "senac";
    private static $base = "dbphp01";
    public $db;

    public function Luiza(){
        $db = $this->conectadb;
    }
  
    public function conectadb(){
        $db=  mysqli_connect($this->getUrl(),$this->getPassword(),
        $this->getBase()) or die (mysqli_errno($db)); 
        return $db;
    }

    function getUrl(){
            return $this->url;
    }

    function getUser(){
        return $this->user;
    }
  
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getBase()
    {
        return $this->base;
    }

    public function setBase($base)
    {
        $this->base = $base;

        return $this;
    }
}