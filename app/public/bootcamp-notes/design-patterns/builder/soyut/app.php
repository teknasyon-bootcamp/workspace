<?php

abstract class Vehicle
{
    public $parts;

    public function setPart(string $part, string $value): void
    {
        $this->parts[$part] = $value;
    }
}

class Car extends Vehicle { }

class Truck extends Vehicle { }

interface VehicleBuilder
{
    public function createVehicle(): void;
    public function addDoors(): void;
    public function setEngine(): void;
    public function getVehicle(): Vehicle;
}

class TruckBuilder implements VehicleBuilder
{
    private Truck $truck;

    public function createVehicle(): void
    {
        $this->truck = new Truck;
    }

    public function addDoors(): void
    {
        $this->truck->setPart('right1', "Door1");
        $this->truck->setPart('right2', "Door2");
        $this->truck->setPart('left1', 'Door3');
        $this->truck->setPart('left2', 'Door4');
    }

    public function setEngine(): void
    {
        $this->truck->setPart('engine', '1.8');
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}

class CarBuilder implements VehicleBuilder
{
    private Car $car;

    public function createVehicle(): void
    {
        $this->car = new Car;
    }

    public function addDoors(): void
    {
        $this->car->setPart('right', "Door1");
        $this->car->setPart('left', 'Door2');
    }

    public function setEngine(): void
    {
        $this->car->setPart('engine', '1.6');
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}

class Director
{
    public function buildVehicle(VehicleBuilder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->setEngine();
        return $builder->getVehicle();
    }
}

$fabrika = new Director();
var_dump($fabrika->buildVehicle($container['vehicle']));
var_dump($fabrika->buildVehicle(new TruckBuilder()));