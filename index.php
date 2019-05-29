<?php 
Class Sayi{
    public function __construct(){
        
    }
    public function hepsiniTopla($element){
        if(gettype($element) == "array"){
            foreach($element as $element1){
                if(gettype($element1) == "array"){
                    $sum += $this->hepsiniTopla($element1);
                }else{
                    $sum += $element1;
                    $this->sum+=$sum;
                }
            }
            return $sum;
        }
        else{
            return $element;
        }
    }
    public function divYazdir(){
    
    }
}


?>