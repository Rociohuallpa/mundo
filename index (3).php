<?php
 require_once("clases/pilas.php");
 $coche = new coche();
 $bicicleta = new bicicleta();

 iniciarVehiculo($coche);
 echo"<br>";
 iniciarVehiculo($bicicleta);
