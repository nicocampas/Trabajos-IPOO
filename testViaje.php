<?php
class Viaje {
  public $codigo;
  public $destino;
  public $cant_max_pasajeros;
  public $pasajeros;

  public function __construct($codigo, $destino, $cant_max_pasajeros) {
    $this->codigo = $codigo;
    $this->destino = $destino;
    $this->cant_max_pasajeros = $cant_max_pasajeros;
    $this->pasajeros = array();
  }

  public function agregarPasajero($nombre, $apellido, $num_doc) {
    $pasajero = array(
      "nombre" => $nombre,
      "apellido" => $apellido,
      "num_doc" => $num_doc
    );
    array_push($this->pasajeros, $pasajero);
  }

  public function modificarDestino($destino) {
    $this->destino = $destino;
  }

  public function modificarCantMaxPasajeros($cant_max_pasajeros) {
    $this->cant_max_pasajeros = $cant_max_pasajeros;
  }

  public function mostrarPasajeros() {
    foreach ($this->pasajeros as $pasajero) {
      echo $pasajero["nombre"] . " " . $pasajero["apellido"] . " (" . $pasajero["num_doc"] . ")\n";
    }
  }
  public function esperarUnosSegundos(){
    for ($i=5;$i>0;$i--){
        echo "Volviendo al menu en: ";
        echo $i."\r";
        sleep(1);
    }
  }
}

// instancia de Viaje
$viaje = new Viaje("NEU8300", "Ciudad de Neuquen", 1);
echo "BIENVENIDO PASAJEROS A VIAJE FELIZ \n";
// bucle del menú
while (true) {
    echo "\n1. Agregar pasajero\n";
    echo "2. Modificar destino\n";
    echo "3. Modificar cantidad máxima de pasajeros\n";
    echo "4. Modificar datos del pasajero\n";
    echo "5. Mostrar pasajeros\n";
    echo "6. Mostrar datos del viaje\n";
    echo "7. Salir\n";
  
    $opcion = readline("Ingrese una opción: ");
  
    switch ($opcion) {
      case 1: // agregar pasajero
        if(count($viaje->pasajeros)<$viaje->cant_max_pasajeros){
        $nombre = readline("Ingrese el nombre del pasajero: ");
        $apellido = readline("Ingrese el apellido del pasajero: ");
        $num_doc = readline("Ingrese el número de documento del pasajero: ");
        $viaje->agregarPasajero($nombre, $apellido, $num_doc);
        $viaje->esperarUnosSegundos()."\n";
        break;
        }
        else{
            echo"No hay mas lugar en el vuelo \n";
            $viaje->esperarUnosSegundos()."\n";
            break;
        }
  
      case 2: // modificar destino
        $destino = readline("Ingrese el nuevo destino: ");
        $viaje->modificarDestino($destino);
        $viaje->esperarUnosSegundos()."\n";
        break;
  
      case 3: // modificar cantidad máxima de pasajeros
        $cant_max_pasajeros = readline("Ingrese la nueva cantidad máxima de pasajeros: ");
        $viaje->modificarCantMaxPasajeros($cant_max_pasajeros);
        $viaje->esperarUnosSegundos()."\n";
        break;
  
      case 4: // modificar datos del pasajero
        echo "Modificar datos del pasajero\n";
        $num_doc = readline("Ingrese el número de documento del pasajero a modificar: ");
        $encontrado = false;
        foreach ($viaje->pasajeros as &$pasajero) {
          if ($pasajero["num_doc"] == $num_doc) {
            $encontrado = true;
            $nombre = readline("Ingrese el nuevo nombre: ");
            $apellido = readline("Ingrese el nuevo apellido: ");
            $num_doc = readline("Ingrese el nuevo número de documento: ");
            $pasajero["nombre"] = $nombre;
            $pasajero["apellido"] = $apellido;
            $pasajero["num_doc"] = $num_doc;
            $viaje->esperarUnosSegundos()."\n";
            break;
          }
        }
        if (!$encontrado) {
          echo "Pasajero no encontrado\n";
        }
        $viaje->esperarUnosSegundos()."\n";
        break;
  
      case 5: // mostrar pasajeros
        echo "Pasajeros del viaje:\n";
        $viaje->mostrarPasajeros();
        $viaje->esperarUnosSegundos()."\n";
        break;
  
      case 6: // mostrar datos del viaje
        echo "Código: " . $viaje->codigo . "\n";
        echo "Destino: " . $viaje->destino . "\n";
        echo "Cantidad máxima de pasajeros: " . $viaje->cant_max_pasajeros . "\n";
        echo "Pasajeros inscritos: " . count($viaje->pasajeros) . "\n";
        $viaje->esperarUnosSegundos()."\n";
        break;
  
      case 7: // salir
        echo "Saliendo...\n";
        exit();
  
      default:
        echo "Opción no válida\n";
        $viaje->esperarUnosSegundos()."\n";
        break;
    }
  }
      
