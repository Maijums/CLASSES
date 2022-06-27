<?php
/*
 For this exercise, you will design a set of classes that work together to simulate a car's fuel gauge and odometer.
 The classes you will design are the following:

The FuelGauge Class: This class will simulate a fuel gauge. Its responsibilities are as follows:

    To know the car’s current amount of fuel, in liters.
    To report the car’s current amount of fuel, in liters.
    To be able to increment the amount of fuel by 1 liter. This simulates putting fuel in the car.
    (The car can hold a maximum of 70 liters.)
    To be able to decrement the amount of fuel by 1 liter, if the amount of fuel is greater than 0 liters.
    This simulates burning fuel as the car runs.

The Odometer Class: This class will simulate the car’s odometer. Its responsibilities are as follows:

    To know the car’s current mileage.
    To report the car’s current mileage.
    To be able to increment the current mileage by 1 kilometer. The maximum mileage the odometer can store is 999,999
    kilometer. When this amount is exceeded, the odometer resets the current mileage to 0.
    To be able to work with a FuelGauge object. It should decrease the FuelGauge object’s current amount of fuel by
    1 liter for every 10 kilometers traveled. (The car’s fuel economy is 10 kilometers per liter.)

Demonstrate the classes by creating instances of each. Simulate filling the car up with fuel,
and then run a loop that increments the odometer until the car runs out of fuel.
During each loop iteration, print the car’s current mileage and amount of fuel.

 */

class FuelGauge
{
    public int $currentAmount;

    public function __construct(int $currentAmount)
    {
        $this->currentAmount = $currentAmount;
    }

    public function reportCurrentAmount() {
        echo $this->currentAmount;
    }

    public function incrementFuel(): int
    {
        for ($i = 0; $i <= 70; $i++) {
            return $i;
        }
        return $this->currentAmount;
    }

    public function decrementFuel(): int {
        for ($x = 70; $x > 0; $x--) {
            return $x;
        }
        return $this->currentAmount;
    }
}

class Odometer
{
    public int $currentMileage;

    public function __construct(int $currentMileage)
    {
        $this->currentMileage = $currentMileage;
    }

    public function reportCurrentMileage() {
            echo $this->currentMileage;
    }

    public function incrementMileage(): int {
        if ($this->currentMileage < 999.999) {
            for ($i = 0; $i <= 70; $i++) {
                return $i;
            }
        } else {
            $this->currentMileage = 0;
       }
        return $this->currentMileage;
    }

    public function decreaseFuel() {
        for ($km = 0; $km = 100; $km+=10) {
            decrementFuel();
        }
    }
}

$start = new FuelGauge(0);

