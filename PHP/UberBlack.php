<?php
require_once('car.php');
class UberBlack extends Car {
    public $typeCarAccepted;
    public $seatsMaterial;

    public function __construct($license, $driver, $typeCarAccepted, $seatMaterial){
        parent::__construct($license, $driver)
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }

    public function printDataCar() {
        echo "Licencia:  $this->license Driver: ".$this->driver->name;
    }
}
?>