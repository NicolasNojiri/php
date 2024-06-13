<?php
class Usuarios{
    private $cpf;
    private $nome;
    private $senha;

    public function __construct($cpf,$nome,$senha){
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->senha = $senha;
    }
    public function getcpf(){
        return $this->cpf;
    }
    public function setcpf($cpf){
        $this->cpf = $cpf;
    }
    public function getnome(){
        return $this->nome;
    }
    public function setnome($nome){
        $this->nome = $nome;
        }
    public function getsenha(){
        return $this->senha;
    }
    public function setsenha($senha){
        $this->senha = $senha;
    }    
    public function mostrardetalhesu(){
        return "Cpf: ".$this->cpf."<br>"."Nome: ".$this->nome."<br>"."Senha: ".$this->senha;
    }
    }   





?>