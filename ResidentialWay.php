<?php

require_once('HighWay.php');

class Residencial extends HighWay
{
    public function __construct()
    {

        parent::__construct(2, 50);
    }

    public function addVehicle($vehicle)
    {
        if (($vehicle instanceof Bicycle) || ($vehicle instanceof Skateboard)) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}
