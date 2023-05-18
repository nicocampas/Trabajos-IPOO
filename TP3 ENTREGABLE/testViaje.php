<?php
    include_once("viaje.php");
    include_once("pasajeros.php");
    include_once("responsableV.php");
    include_once("pasajeroEstandar.php");
    include_once("pasajeroVip.php");
    include_once("pasajeroEspecial.php");

    $pasajero1 = new PasajeroVip("Roman","Riquelme",24413038,2995803829,70,158);
    $pasajero2 = new PasajeroEstandar("Leandro","Paredes",20808424,299473338,12,"A33");
    $pasajero3 = new PasajeroEspecial("Lionel","Messi",29333000,299466443,"si","no","no");
    $coleccionPasajeros = [];

    $objResponsable = new ResponsableV("Nicolas","Campas",119,333);
    
    $viaje = new Viaje("NQN001","Neuquen",7,$coleccionPasajeros,$objResponsable,300,0);

    $viaje->venderPasaje($pasajero1);
    $viaje->venderPasaje($pasajero2);
    $viaje->venderPasaje($pasajero3);
    echo $viaje;
    