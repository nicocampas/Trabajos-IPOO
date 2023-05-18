<?php
    include_once("pasajeros.php");
    class PasajeroVip extends Pasajeros{
        private $numFrecuente;
        private $cantMillas;
            public function __construct($a1,$a2,$a3,$a4,$a5,$a6){
                parent::__construct($a1,$a2,$a3,$a4);
                $this->numFrecuente = $a5;
                $this->cantMillas = $a6;
            }
            public function getnumFrecuente(){
                return $this->numFrecuente;
            }
            public function getcantMillas(){
                return $this->cantMillas;
            }
            public function setnumFrecuente($a5){
                $this->numFrecuente = $a5;
            }
            public function setcantMillas($a6){
                $this->cantMillas = $a6;
            }
            public function darPorcentajeIncremento(){
                if($this->getcantMillas()>300){
                    return 30;
                }
                else{
                    return 35;
                }
            }
            public function __toString(){
                $texto = parent::__toString();
                $texto = $texto."\nCantidad de millas: ".$this->getcantMillas().
                "\nNumero de viajero Frecuente: ".$this->getnumFrecuente();
                return $texto;
            }
    }