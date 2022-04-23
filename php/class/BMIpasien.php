<?php
class BMIpasien{
    public $id, $BMI, $tanggal, $pasien;

    function __construct($id, $BMI, $tanggal, $pasien)
    {
        $this->id=$id;
        $this->BMI=$BMI;
        $this->tanggal=$tanggal;
        $this->pasien=$pasien;
    }
}