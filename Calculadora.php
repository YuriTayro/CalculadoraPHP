<?php

class Calculadora{
    //Atributos
    private $total;

    //Métodos Especiais
    function __construct($total=0){
        $this->total=$total;
  }
  
  public function getTotal() {
      return $this->total;
  }
  
  
  public function setTotal($total){
      $this->total = $total;
      
  }

    //Metodos
    function add($num){
        $this->setTotal($this->getTotal()+$num);
    }

    function sub($num){
        $this->setTotal($this->getTotal()-$num);
    }

    function multiply($num){
        $this->setTotal($this->getTotal()*$num);
    }

    function divide($num){
        $this->setTotal($this->getTotal()/$num);
    }

    function clear(){
        $this->setTotal(0);
    }

    function total(){
        return $this-> getTotal();
    }

    
}