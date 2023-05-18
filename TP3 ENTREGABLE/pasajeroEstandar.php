<?php
    include_once("pasajeros.php");
    class PasajeroEstandar extends Pasajeros{
        private $numTicket;
        private $numAsiento;
            public function __construct($a1,$a2,$a3,$a4,$a5,$a6){
                parent::__construct($a1,$a2,$a3,$a4);
                $this->numTicket = $a5;
                $this->numAsiento = $a6;
            }
            public function getNumTicket(){
                return $this->numTicket;
            }
            public function getNumAsiento(){
                return $this->numAsiento;
            }
            public function setNumTicket($a5){
                $this->numTicket = $a5;
            }
            public function setNumAsiento($a6){
                $this->numAsiento = $a6;
            }
            public function __toString(){
                $texto = parent::__toString();
                $texto = $texto."\nNumero de asiento: ".$this->getNumAsiento().
                "\nNumero de ticket: ".$this->getNumTicket();
                return $texto;
            }
    }