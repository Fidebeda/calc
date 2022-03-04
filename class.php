<?php


class Kalkulacka{
    public $firstNumber;
    public $secondNumber;

    public function scitani($firstNumber,$secondNumber){
        echo "addition".($firstNumber + $secondNumber);
    }
    public function odcitani($firstNumber,$secondNumber){
        echo "subtraction".($firstNumber - $secondNumber);
    }
    public function nasobeni($firstNumber,$secondNumber){
        echo "multiplication".($firstNumber * $secondNumber);
    }
    public function deleni($firstNumber,$secondNumber){
        if($secondNumber != 0){
            echo "division".($firstNumber / $secondNumber);
        } else echo "pozor nula";
        
    }
}






?>