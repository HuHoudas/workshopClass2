<?php

class Cars
{
    private int $nbWheels;

    private int $currentSpeed;

    private string $color;


    private int $nbSeats;


    private string $energy;

    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
    public function forward(): string
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

    public function start(): string
    {
        $this->currentSpeed = 1;

        return 'a demarrer';
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

    public function getColor(): int
    {
        return $this->currentSpeed;
    }

    public function setColor(string $color): void
    {
            $this->color = $color;
    }
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        if ($nbWheels === 4)
            $this->nbWheels = $nbWheels;
    }
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
            $this->nbSeats = $nbSeats;
    }
    public function getEnergy(): int
    {
        return $this->energy;
    }

    public function setEnergy(int $energy): void
    {
            $this->energy = $energy;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
            $this->currentSpeed = $energyLevel;
    }
}
