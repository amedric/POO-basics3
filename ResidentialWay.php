<?php

require_once 'HighWay.php';


final class ResidentialWay extends HighWay
{
    private array $currentVehicles;
    private int $nbLane = 2;
    private int $maxSpeed = 50;

    public function addVehicle(object $vehicle)
    {
        if ($vehicle instanceof Vehicle) {
            $currentVehicles[] = $vehicle;
            $this->setCurrentVehicles($currentVehicles);
        } else {
            echo "This vehicle can't access to this way.";
        }
    }
}
