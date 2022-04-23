<?php
class bmi{
    public $berat, $tinggi;
    
    function __construct($berat, $tinggi)
    {
        $this->berat=$berat;
        $this->tinggi=$tinggi;
    }
    
    function nilai(){
        $BMI = $this->berat/pow($this->tinggi/100,2);
        return $BMI;
    }
    function status(){
        $nilaiBMI = $this->nilai();
        if ($nilaiBMI <18.5){
            return 'kekurangan berat badan';
        }
        elseif ($nilaiBMI >18.5 and $nilaiBMI <24.9){
            return 'Berat ideal';
        }
        elseif ($nilaiBMI >25.0 and $nilaiBMI <29.9 ){
            return 'Kelebihan berat badan';
        }
        else{
            return 'Kegemukan';
        }
    }
}
