<?php

require_once 'HighWay.php';


final class PedestrianWay extends HighWay
{
    private array $currentVehicles;
    private int $nbLane = 1;
    private int $maxSpeed = 10;

    public function addVehicle(object $vehicle)
    {
        if (($vehicle instanceof Bike || $vehicle instanceof Skateboard )) {
            $currentVehicles[] = $vehicle;
            $this->setCurrentVehicles($currentVehicles);
        } else {
            echo "This vehicle can't access to this way.";
        }
    }
}
