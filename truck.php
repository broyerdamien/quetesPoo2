<?php
require_once 'Vehicle.php';

class truck extends Vehicle
{     
    private string $energy;
    private int $stockCapacity;
    private int $loadingTruck = 0;
    

    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
    $this->energy = $energy;
    $this->stockCapacity = $stockCapacity;
    
    }

    public function getEnergy(): string
{
    return $this->energy;
}

public function setEnergy(string $energy): void
{
    $this->energy =  $energy;
}
public function getStockCapacity(): int
{
    return $this->stockCapacity;
}

public function setStockCapacity(int $stockCapacity): void
{
    $this->stockCapacity =  $stockCapacity;
}

public function getLoadingTruck(): int
{
    return $this->loadingTruck;
}

public function setLoadingTruck(int $loadingTruck ): void
{
    $this->loadingTruck  =  $loadingTruck ;
}

public function load(): string
{
    $sentence="";
   if ( $this->stockCapacity>$this->loadingTruck)
   { $sentence = "in felling";}
   else{
    $sentence = "full";
   }
   return $sentence;
}

}

?>