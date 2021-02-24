<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    
    /* @var int */
    private $storage;
    
     /* @var int */
    protected $loading = 0;

    /* @var string */
    private $energy;

    /* @var int */
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy, int $storage)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStorage($storage);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


    public function getStorage(){
        return $this->storage;
    }

    public function setStorage(int $storage) : void
    {
        $this->storage = $storage;
      
    }

    public function isLoading(): string 
    {
          $sentence = "";
        
        while($this->loading <10){
            $this->loading ++;
            $sentence .= " in filling ... ";
        }

        $sentence .= " full ! ";
        return $sentence;
    }
}
