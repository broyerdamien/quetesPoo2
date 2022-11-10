<?php

require_once 'HighWay.php';

class MotorWay extends HighWay
{
    public function __construct()
    {

        parent::__construct(4, 130);
    }

    public function addVehicle($vehicle)
    {
        if (!($vehicle instanceof Bicycle) || ($vehicle instanceof Skateboard)) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}
