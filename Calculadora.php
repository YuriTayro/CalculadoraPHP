<?php

  class Calculadora{
    //Atributos
    protected $total;

    //Métodos Especiais
    public function __construct($total=0){
        $this->total=$total;
  }
  
  public function getTotal() {
      return $this->total;
  }
  
  
  public function setTotal($total){
      $this->total = $total;
      
  }

    //Metodos
   public function add($num){
        $this->setTotal($this->getTotal()+$num);
    }

   public function sub($num){
        $this->setTotal($this->getTotal()-$num);
    }

   public function multiply($num){
        $this->setTotal($this->getTotal()*$num);
    }

   public function divide($num){
        $this->setTotal($this->getTotal()/$num);
    }

   public function clear(){
        $this->setTotal(0);
    }

   public function total(){
        return $this-> getTotal();
    }    
}
