<?php
class Filmes{
    private $titulo;
    private $genero;
    private $ano;

    public function __construct($titulo,$genero,$ano){
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->ano = $ano;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function setGenero($genero){
        $this->genero = $genero;
        }
    public function getAno(){
        return $this->ano;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }    
    public function mostrardetalhes(){
        return "Titulo: ".$this->titulo."<br>"."Genero: ".$this->genero."<br>"."Ano: ".$this->ano;
    }
    }   





?>