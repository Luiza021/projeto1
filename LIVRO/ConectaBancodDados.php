<?php
class Conecta {
    private  $url  = "localhost:3306";
    private  $user = "root";
    private  $password = "senac";
    private  $base = "dbphp01";
    public    $db;
     public function conectadb(){
        $db=  mysqli_connect($this->getUrl(),$this->getUser(),$this->getPassword(),
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