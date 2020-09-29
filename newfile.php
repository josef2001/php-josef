<?php
class josefvarak  {
    private $telefon;
    private $email;
    protected $ucet;
    protected $heslo;
    protected $tajemstvi;
    public $jmeno;
    public $prijmeni;
    public $vek;
    public $zamestnani;
    public $skola;
    
    function __construct() {
    }
    function __set($telefon, $email ){
        $telefon = "258474475!";
        echo $telefon;
        $telefon = "Josefvara!";
        echo $telefon;
        $email = "josefokoj!";
        echo $email;
        $email = "25252!";
        echo $email;
    }
    function s_get( $jmeno, $prijmeni, $vek, $zamestnani, $skola){
        $jmeno = "Josef!";
        echo $jmeno;
        $prijmeni = "varak!";
        echo $prijmeni;
        $vek = "999!";
        echo $vek;
        $zamestnani = "popelar";
        echo $zamestnani;
        $skola = "ssemi!";
        echo $skola;
        
    }
    function var_dump( $jmeno, $prijmeni, $vek, $zamestnani, $skola,$telefon, $email, $ucet, $heslo, $tajemstvi ) {
    }
}
?>