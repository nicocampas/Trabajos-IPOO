<?php
    class Viaje{
        private $codigo;
        private $destino;
        private $cantMax;
        private $pasajeros;
        private $responsableV;
        private $costoViaje;
        private $costoAbonados;
            public function __construct($codigoP,$destinoP,$cantMaxP,$pasajerosP,$responsableVP,$costoViajeP,$costoAbonadosP){
                $this->codigo = $codigoP;
                $this->destino = $destinoP;
                $this->cantMax = $cantMaxP;
                $this->pasajeros = $pasajerosP;
                $this->responsableV = $responsableVP;
                $this->costoViaje = $costoViajeP;
                $this->costoAbonados = $costoAbonadosP;
            }
            public function getCodigo(){
                return $this->codigo;
            }
            public function getDestino(){
                return $this->destino;
            }
            public function getCantMax(){
                return $this->cantMax;
            }
            public function getPasajeros(){
                return $this->pasajeros;
            }
            public function getResponsableV(){
                return $this->responsableV;
            }
            public function getCostoViaje(){
                return $this->costoViaje;
            }
            public function getCostoAbonados(){
                return $this->costoAbonados;
            }
            public function setCodigo($codigoP){
                $this->codigo = $codigoP;
            }
            public function setDestino($destinoP){
                $this->destino = $destinoP;
            }
            public function setCantMax($cantMaxP){
                $this->cantMax = $cantMaxP;
            }
            public function setPasajeros($pasajerosP){
                $this->pasajeros = $pasajerosP;
            }
            public function setResponsableV($responsableVP){
                $this->responsableV = $responsableVP;
            }
            public function setCostoViaje($costoViajeP){
                $this->costoViaje = $costoViajeP;
            }
            public function setCostoAbonados($costoAbonadosP){
                $this->costoAbonados = $costoAbonadosP;
            }
            public function venderPasaje($objPasajero){
                if($this->hayPasajeDisponible()){
                    $this->agregar_pasajero($objPasajero->getNombre(),$objPasajero->getApellido(),$objPasajero->getDni(),$objPasajero->getNumeroTel());
                    $aumento = $this->getCostoViaje()+($objPasajero->darPorcentajeIncremento()/100)*$this->getCostoViaje();
                    $this->setCostoAbonados($this->getCostoAbonados()+$aumento);
                    return $aumento;
                }
                else{
                    return null;
                }
            }
            public function hayPasajeDisponible(){
                if(count($this->getPasajeros())<$this->getCantMax()){
                    return true;
                }
                else{
                    return false;
                }
            }
            public function agregar_pasajero($nombre,$apellido,$dni,$numeroTel){
                $colPasajero = $this->getPasajeros();
                $pasajero = new Pasajeros($nombre,$apellido,$dni,$numeroTel);
                array_push($colPasajero,$pasajero);
                $this->setPasajeros($colPasajero);
            }
            public function modificar_pasajero($nombre,$apellido,$dni,$numeroTel){
                $i = 0;
                    while($this->getPasajeros()[$i]->getDni()!=$dni && $i<count($this->getPasajeros())-1){
                        $i++;
                    }
                if($this->getPasajeros()[$i]->getDni()==$dni){
                    $this->getPasajeros()[$i]->setNombre($nombre);
                    $this->getPasajeros()[$i]->setApellido($apellido);
                    $this->getPasajeros()[$i]->setNumeroTel($numeroTel);
                }
                else{
                    return null;
                }
            }
            public function mostrar_pasajeros(){
                $texto = "";
                    for($i=0; $i<count($this->getPasajeros()); $i++){
                        $texto = $texto."\n".$this->getPasajeros()[$i];
                    }
                return $texto;
            }
            public function __toString(){
                $texto = "\nDestino: ".$this->getDestino().
                "\n\nCodigo: ".$this->getCodigo().
                "\n\nPasajeros: ".$this->mostrar_pasajeros().
                "\n\nCantidad maxima de pasajeros: ".$this->getCantMax().
                "\n\nResponsable de viaje: \n".$this->getResponsableV().
                "\n\nCosto de Viaje: ".$this->getCostoViaje().
                "\n\nCosto abonado por pasajeros: ".$this->getCostoAbonados().
                "\n\n-----------------------------------------------------"."\n";
                return $texto;
            }
    }
    