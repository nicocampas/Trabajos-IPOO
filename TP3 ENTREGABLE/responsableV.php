<?php
class ResponsableV{
        private $nombre;
        private $apellido;
        private $nroEmpleado;
        private $nroLicencia;
            public function __construct($a1,$a2,$a3,$a4){
                $this->nombre = $a1;
                $this->apellido = $a2;
                $this->nroEmpleado = $a3;
                $this->nroLicencia = $a4;
            }
            public function getNombre(){
                return $this->nombre;
            }
            public function getApellido(){
                return $this->apellido;
            }
            public function getNroEmpleado(){
                return $this->nroEmpleado;
            }
            public function getNroLicencia(){
                return $this->nroLicencia;
            }
            public function setNombre($a1){
                $this->nombre = $a1;
            }
            public function setApellido($a2){
                $this->apellido = $a2;
            }
            public function setNroEmpleado($a3){
                $this->nroEmpleado = $a3;
            }
            public function setNroLicencia($a4){
                $this->nroLicencia = $a4;
            }
            public function __toString(){
                    $texto = "nombre: ".$this->getNombre().
                    "\napellido: ".$this->getApellido().
                    "\nnumero empleado: ".$this->getNroEmpleado().
                    "\nnumero licencia: ".$this->getNroLicencia();
                    return $texto;
            }
    }