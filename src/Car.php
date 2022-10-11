<?php

class Car
{
    private int $nbWheels = 4;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats = 5;
    private string $energyType;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energyType)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energyType = $energyType;
    }

    public function forward(): string
    {
        $this->currentSpeed = 150;
        return 'Go';
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= " Brake ";
        }
        $sentence .= "The car has stopped";
        return $sentence;
    }

    public function start(): string
    {
        $sentence = "";
        if ($this->currentSpeed = 0) {
            $this->currentSpeed++;
            $sentence .= " Start the car!";
        }
        $sentence .= "The car has started";
        return $sentence;
    }

    public function dump()
    {
        var_dump($this);
    }


    public function getnbWheels(): int
    {
        return $this->nbWheels;
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

    public function getnbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergyType(): string
    {
        return $this->energyType;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel): void
    {
        if ($energyLevel >= 0) {
            $this->energyLevel = $energyLevel;
        }
    } 
}
