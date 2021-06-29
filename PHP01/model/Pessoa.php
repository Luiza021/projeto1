<?php
 class Pessoa{
     private $idpessoa;
     private $nome;
     private $dtNasc;
     private $login;
     private $senha;
     private $perfil;
     private $email;
     private $cpf;

     

     public function getIdpessoa()
     {
          return $this->idpessoa;
     }

     public function setIdpessoa($idpessoa)
     {
          $this->idpessoa = $idpessoa;

          return $this;
     }
    
     public function getNome()
     {
          return $this->nome;
     }

     public function setNome($nome)
     {
          $this->nome = $nome;

          return $this;
     }

     public function getDtNasc()
     {
          return $this->dtNasc;
     }

     public function setDtNasc($dtNasc)
     {
          $this->dtNasc = $dtNasc;

          return $this;
     }
 
     public function getLogin()
     {
          return $this->login;
     }
    
     public function setLogin($login)
     {
          $this->login = $login;

          return $this;
     }

     public function getSenha()
     {
          return $this->senha;
     }

     public function setSenha($senha)
     {
          $this->senha = $senha;

          return $this;
     }

     public function getPerfil()
     {
          return $this->perfil;
     }

     public function setPerfil($perfil)
     {
          $this->perfil = $perfil;

          return $this;
     }

     public function getEmail()
     {
          return $this->email;
     }
 
     public function setEmail($email)
     {
          $this->email = $email;

          return $this;
     }

     public function getCpf()
     {
          return $this->cpf;
     }

     public function setCpf($cpf)
     {
          $this->cpf = $cpf;

          return $this;
     }
 }