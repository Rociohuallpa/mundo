<?php
class Vehiculo {
    public function arrancar() {
        echo "El vehículo ha arrancado\n";
    }
}

class bicicleta extends Vehiculo {
    public function arrancar() {
        echo "La bicicleta no tiene motor\n";
    }
}

class coche extends Vehiculo {
    public function arrancar() {
        echo "El coche esta arrancado\n";
    }
}

// Uso polimórfico
function iniciarVehiculo(Vehiculo $v) {
    $v->arrancar();
}
