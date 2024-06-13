<?php
class Generos{
    private $descricao;
    private $idgenero;
    private $status;

    public function __construct($descricao,$idgenero,$status){
        $this->descricao = $descricao;
        $this->idgenero = $idgenero;
        $this->status = $status;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function getidGenero(){
        return $this->idgenero;
    }
    public function setidGenero($idgenero){
        $this->idgenero = $idgenero;
        }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }    
    public function mostrardetalhesg(){
        return "Descricao: ".$this->descricao."<br>"."idGenero: ".$this->idgenero."<br>"."Status: ".$this->status;
    }
    }   





?>