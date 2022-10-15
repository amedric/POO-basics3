<?php

require_once 'HighWay.php';

final class MotorWar extends HighWay
{
    private array $currentVehicles;
    private int $nbLane = 4;
    private int $maxSpeed = 130;

    public function addVehicle(object $vehicle)
    {
        if (!($vehicle instanceof Bike || $vehicle instanceof Skateboard )) {
            $currentVehicles[] = $vehicle;
            $this->setCurrentVehicles($currentVehicles);
        } else {
            echo "This vehicle can't access to this way.";
        }
    }
}
