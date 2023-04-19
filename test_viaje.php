<?php
    include_once("viaje.php");
    $obj = new Viaje("CBA123","Cordoba",75,[],"");
    while(true){
        echo "seleccione una opcion:\n".
        "1. elegir viaje\n".
        "2. modificar viaje\n".
        "3. agregar pasajero\n".
        "4. modificar pasajero\n".
        "5. ver informacion de pasajeros\n".
        "6. ver datos del viaje\n".
        "7. salir\n";
        $opcion = trim(fgets(STDIN));
        switch ($opcion) {
            case 1:
                $obj->ingresar_viaje();
                break;
            case 2:
                $obj->modificar_viaje();
                break;
            case 3:
                $obj->agregar_pasajeros();
                break;
            case 4:
                echo "ingrese dni para actualizar sus datos: ";
                $dni = trim(fgets(STDIN));
                $obj->modificar_pasajero($dni);
                break;
            case 5:
                echo $obj->mostrar_pasajeros();
                break;
            case 6:
                echo $obj->__toString();
                break;
            case 7:
                exit();
                break;
            default:
                echo "opcion erronea\n";
                break;
    }
}