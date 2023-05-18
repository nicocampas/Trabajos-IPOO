<?php
class Pasajeros{
        private $nombre;
        private $apellido;
        private $dni;
        private $numeroTel;
            public function __construct($a1,$a2,$a3,$a4){
                $this->nombre = $a1;
                $this->apellido = $a2;
                $this->dni = $a3;
                $this->numeroTel = $a4;
            }
            public function getNombre(){
                return $this->nombre;
            }
            public function getApellido(){
                return $this->apellido;
            }
            public function getDni(){
                return $this->dni;
            }
            public function getNumeroTel(){
                return $this->numeroTel;
            }
            public function setNombre($a1){
                $this->nombre = $a1;
            }
            public function setApellido($a2){
                $this->apellido = $a2;
            }
            public function setDni($a3){
                $this->dni = $a3;
            }
            public function setNumeroTel($a4){
                $this->numeroTel = $a4;
            }
            public function darPorcentajeIncremento(){
                return 10;
            }
            public function __toString(){
                    $texto = "\nnombre: ".$this->getNombre().
                    "\napellido: ".$this->getApellido().
                    "\ndni: ".$this->getDni().
                    "\ntelefono: ".$this->getNumeroTel();
                    return $texto;
            }
    }