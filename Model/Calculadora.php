<?php

class Calculadora {
    //atrib
    public $operador;
    public $numero1;
    public $numero2;

    //methods
    public function __construct( $operador,  $numero1, $numero2) {
        $this->operador = $operador;
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

    public function  calcular(){
        switch ($this->operador){
            case '+': 
                echo '<p>';
                echo $this->numero1 ;
                echo'+' ;
               echo $this->numero2;
              echo   '=';
             echo $this->numero1 + $this->numero2;
             echo '</p>';
             
              
              
                
            break;
            case '-': 
                echo '<p>';
                echo $this->numero1 ;
                echo'-' ;
               echo $this->numero2;
              echo   '=';
             echo $this->numero1 - $this->numero2;
             echo '</p>';
             
                
            break;
            case '/': 
                echo '<p>';
                echo  $this->numero1.'/' .$this->numero2.'='.$this->numero1/$this->numero2;
                echo '</p>';
                
                
            break;
            case '*': 
                echo '<p>';
                echo  $this->numero1.'*' .$this->numero2.'='.$this->numero1*$this->numero2;
                echo '</p>';
                
                
            break;
           
            default:
                echo '<p> Ha ocurrido un error </p>';
                echo '<hr>';
        break;
        }
    }

}



?>