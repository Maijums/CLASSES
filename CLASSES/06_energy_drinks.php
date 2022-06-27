<?php
/*
 See energy-drinks.php://////////////////////////
$surveyed = 12467;
$purchased_energy_drinks = 0.14;
$prefer_citrus_drinks = 0.64;

function calculate_energy_drinkers(int $numberSurveyed)
{
    throw new LogicException(";(");
}

function calculate_prefer_citrus(int $numberSurveyed)
{
    throw new LogicException(";(");
}

/*
fixme
echo "Total number of people surveyed " . $surveyed;
echo "Approximately " . ? . " bought at least one energy drink";
echo ? . " of those " . "prefer citrus flavored energy drinks.";
/////////////////////////////////////////////////////////////////////
A soft drink company recently surveyed 12,467 of its customers and found that approximately 14 percent of those surveyed purchase one or more energy drinks per week. Of those customers who purchase energy drinks, approximately 64 percent of them prefer citrus flavored energy drinks.

Write a program that displays the following:
    The approximate number of customers in the survey who purchased one or more energy drinks per week
    The approximate number of customers in the survey who prefer citrus flavored energy drinks
 */

class Survey
{

public string $surveyed;
public string $purchased_energy_drinks;
public string $prefer_citrus_drinks;

    public function __construct(int $surveyed, float $purchased_energy_drinks, float $prefer_citrus_drinks)
    {
        $this->surveyed = $surveyed;
        $this->purchased_energy_drinks = $purchased_energy_drinks;
        $this->prefer_citrus_drinks = $prefer_citrus_drinks;
    }


    function calculate_energy_drinkers(int $numberSurveyed, float $purchased): int
    {
        if ($numberSurveyed < 10000) {
            throw new LogicException("Value must be 10k or more.");
        }
        return round($numberSurveyed * $purchased);
    }


    function calculate_prefer_citrus(int $drinkers, float $preferer): int
    {
        if ($drinkers < $preferer) {
            throw new LogicException("It's not possible!");
        }
        return round($drinkers * $preferer);
    }
}

$survey1 = new Survey(12467, 0.14, 0.64);

echo "Total number of people surveyed: " . $survey1->surveyed . "\n";

$drinkers = $survey1->calculate_energy_drinkers($survey1->surveyed, $survey1->purchased_energy_drinks);

echo "Approximately " . $drinkers . " bought at least one energy drink" . "\n";

$preferer = $survey1->calculate_prefer_citrus($drinkers, $survey1->prefer_citrus_drinks);

echo $preferer . " of those " . "prefer citrus flavored energy drinks." . "\n";






/*
fixme
echo "Total number of people surveyed " . $surveyed;
echo "Approximately " . ? . " bought at least one energy drink.";
echo ? . " of those " . "prefer citrus flavored energy drinks.";
*/



