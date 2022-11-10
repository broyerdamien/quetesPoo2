<?php

require_once('HighWay.php');

class PedestrianWay extends HighWay
{
    public function __construct()
    {

        parent::__construct(1, 10);
    }

    public function addVehicle($vehicle)
    {

        $this->currentVehicles[] = $vehicle;
    }
}
