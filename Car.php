<?php
class Car {
    private $nbWheels = 4;
    private $currentSpeed;
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy){
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0 && $this->energyLevel > 0) {
            $this->currentSpeed--;
            $this->energyLevel--;

            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start()
    {
        return "Engine on !";
    }



    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }



    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbWheels(): string
    {
        return $this->nbWheels;
    }

    public function getNbSeat(): string
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergyLevel(int $energy): void
    {
        if ($energy >= 0) {
            $this->energyLevel = $energy;
        }
    }


    public function getEnergyLevel(): string
    {
        return $this->energyLevel;
    }


}

?>