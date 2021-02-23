<?php

class Bicycle
{
    /* @var string */
    private $color;

    public function __construct(string $color)
    {
        $this->color = $color;
    }

    /*  @var integer */
    private $currentSpeed;

    /*  @var integer */
    private $nbSeats = 1;

    /*  @var integer */
    private $nbWheels = 2;


    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    /*  @return string */

    public function getColor(): string
    {
        return $this->color;
    }

    /* @param string $color */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /* @return int */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /* @param int $currentSpeed
    @return void */
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
}
