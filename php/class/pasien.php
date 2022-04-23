<?php
class pasien{
    public $id, $kode, $nama, $tempat_lahir, $tgl_lahir, $email, $gender;

    function __construct( $id, $nama, $tempat_lahir, $tgl_lahir, $email, $gender)
    {
        $this->id=$id;
        $this->nama=$nama;
        $this->tempat_lahir=$tempat_lahir;
        $this->tgl_lahir=$tgl_lahir;
        $this->email=$email;
        $this->gender=$gender;
    }

    
}


