<?php
    include_once("pasajeros.php");
    class PasajeroEspecial extends Pasajeros{
        private $sillaDeRuedas;
        private $asistencia;
        private $comidaEspecial;
            public function __construct($a1,$a2,$a3,$a4,$a5,$a6,$a7){
                parent::__construct($a1,$a2,$a3,$a4);
                $this->sillaDeRuedas = $a5;
                $this->asistencia = $a6;
                $this->comidaEspecial = $a7;
            }
            public function getsillaDeRuedas(){
                return $this->sillaDeRuedas;
            }
            public function setsillaDeRuedas($a5){
                $this->sillaDeRuedas = $a5;
            }
            public function getAsistencia(){
                return $this->asistencia;
            }
            public function setAsistencia($a6){
                $this->asistencia = $a6;
            }
            public function getComidaEspecial(){
                return $this->comidaEspecial;
            }
            public function setComidaEspecial($a7){
                $this->comidaEspecial = $a7;
            }
            public function darPorcentajeIncremento(){
                if($this->getsillaDeRuedas()=="si" && $this->getAsistencia()=="si" && $this->getComidaEspecial()=="si"){
                    return 30;
                }
                elseif($this->getsillaDeRuedas()=="si" && $this->getAsistencia()=="si"){
                    return 30;
                }
                elseif($this->getsillaDeRuedas()=="si" && $this->getComidaEspecial()=="si"){
                    return 30;
                }
                elseif($this->getAsistencia()=="si" && $this->getComidaEspecial()=="si"){
                    return 30;
                }
                else{
                    return 15;
                }
            }
            public function __toString(){
                $texto = parent::__toString();
                $texto = $texto."\nSilla de Ruedas: ".$this->getsillaDeRuedas().
                "\nAsistencia para embarcar o desembarcar: ".$this->getAsistencia().
                "\nComida Especial: ".$this->getComidaEspecial();
                return $texto;
            }
    }