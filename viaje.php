<?php
    class Viaje{
        private $codigo;
        private $destino;
        private $cantMax;
        private $pasajeros;
        private $responsableV;
            public function __construct($a1,$a2,$a3,$a4,$a5){
                $this->codigo = $a1;
                $this->destino = $a2;
                $this->cantMax = $a3;
                $this->pasajeros = $a4;
                $this->responsableV = $a5;
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
            public function getResponsablev(){
                return $this->responsableV;
            }
            public function setCodigo($a1){
                $this->codigo = $a1;
            }
            public function setDestino($a2){
                $this->destino = $a2;
            }
            public function setCantMax($a3){
                $this->cantMax = $a3;
            }
            public function setPasajeros($i,$a4){
                $this->pasajeros[$i] = $a4;
            }
            public function setResponsablev($a5){
                $this->responsableV = $a5;
            }
            public function ingresar_viaje(){
                echo "ingrese destino: ";
                $this->setDestino(trim(fgets(STDIN)));
                echo "ingrese codigo de destino: ";
                $this->setCodigo(trim(fgets(STDIN)));
            }
            public function modificar_viaje(){
                echo "ingrese nuevo destino: ";
                $this->setDestino(trim(fgets(STDIN)));
                echo "ingrese nuevo codigo de destino: ";
                $this->setCodigo(trim(fgets(STDIN)));
            }
            public function agregar_pasajeros(){
                if(count($this->getPasajeros())<$this->getCantMax()){
                    echo "ingrese nombre: ";
                    $nombre = trim(fgets(STDIN));
                    echo "ingrese apellido: ";
                    $apellido = trim(fgets(STDIN));
                    echo "ingrese dni: ";
                    $dni = trim(fgets(STDIN));
                    echo "ingrese numero de telefono: ";
                    $telefono = trim(fgets(STDIN));
                    $objPasajeros = new Pasajeros($nombre,$apellido,$dni,$telefono);
                    $this->setPasajeros(count($this->getPasajeros()),$objPasajeros->agregar_pasajero());
                }
                else{
                    echo "no hay mas espacio en el viaje\n";
                }
            }
            public function modificar_pasajero($dni){
                $indice = array_search($dni,$this->getPasajeros());
                    if($dni==$this->getPasajeros()[$indice]["dni"]){
                        echo "Ingrese nuevo nombre: ";
                        $nombre = trim(fgets(STDIN));
                        echo "Ingrese nuevo apellido: ";
                        $apellido = trim(fgets(STDIN));
                        echo "Ingrese nuevo numero de telefono: ";
                        $telefono = trim(fgets(STDIN));
                        $objPasajeros = new Pasajeros($nombre,$apellido,$dni,$telefono);
                        $this->setPasajeros($indice,$objPasajeros->agregar_pasajero());
                    }
                    else{
                        echo "no se encontro el dni ingresado\n";
                    }
            }
            public function mostrar_pasajeros(){
                $mostrarPasajeros = "";
                for($i=0;$i<count($this->getPasajeros());$i++){
                    $mostrarPasajeros = $mostrarPasajeros.$this->getPasajeros()[$i]["nombre"]." ".$this->getPasajeros()[$i]["apellido"]." ".$this->getPasajeros()[$i]["dni"]." ".$this->getPasajeros()[$i]["telefono"]."\n";
                }
                return $mostrarPasajeros;
            }
            public function __toString(){
                $texto = "Destino: ".$this->getDestino().
                "\nCodigo: ".$this->getCodigo().
                "\nPasajeros: ".count($this->getPasajeros()).
                "\nCantidad maxima de pasajeros: ".$this->getCantMax()."\n";
                return $texto;
            }
    }
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
            public function agregar_pasajero(){
                    $arreglo = ["nombre"=>$this->getNombre(),"apellido"=>$this->getApellido(),"dni"=>$this->getDni(),"telefono"=>$this->getNumeroTel()];
                    return $arreglo;
   }
}