<?php

include_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private int $storageCapacity;
    private int $loading;
    private string $energy;

    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
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

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->nbSeats = $storageCapacity;
    }

    public function getLoading(): int
    {
        return $this->loadind;
    }

    public function setLoading(int $loading): void
    {
        $this->nbSeats = $loading;
    }

    public function currentLoading(int $loading): string
    {
        if ($this->storageCapacity > $loading) {
            return 'in filling';
        } else {
            return 'full';
        }
    }
}
