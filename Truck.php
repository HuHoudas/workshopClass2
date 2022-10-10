<?php 

require_once './vehicule.php';

class Truck extends Vehicle 
{
    private int $storage;

    private int $charge = 1;

    public function __construct (string $color, int $nbSeats, string $energy, int $storage) 
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->storage = $storage;
    }

    public function getCharge(): string
    {
        return $this->charge;
    }

    public function setCharge(int $charge): void
    {
        $this->charge = $charge;
    }
    
    public function isFull (int $charge): string
    {
        if ($charge >= $this->storage){
            return 'Full';
        } else {
            return 'in filling';
        }
    }
}
