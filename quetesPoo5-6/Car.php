<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var int
     */
    private $energyLevel;

    private $hasParkBrake = true;

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function switchOn() : bool
    {
        return true;
    }

    public function switchOff() : bool
    {
        return false;
    }

    public function setParkBrake()
    {
        if ($this->hasParkBrake == false){
            $this->hasParkBrake = true;
        }else{
            $this->hasParkBrake = false;
        }
    }

    public function start()
    {
        if($this->hasParkBrake){
            throw new Exception("Il faut enlever le frein à main. ");
        }
    }


}