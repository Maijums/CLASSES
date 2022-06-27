<?php
/*
 Create a class called Date that includes: three pieces of information as instance variables —
 a month, a day and a year.

 Your class should have a constructor that initializes the three instance variables and assumes
 that the values provided are correct. Provide a set and a get for each instance variable.

Provide a method DisplayDate that displays the month, day and year separated by forward slashes /.

Write a test application named DateTest that demonstrates class Date capabilities.
 */

class Date
{
    public int $month;
    public int $day;
    public int $year;

    public function __construct(int $month, int $day, int $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function set_month(): int
    {
        return $this->month;
    }

    public function get_month(): int
    {
        return $this->month;
    }

    public function set_day(): int
    {
        return $this->day;
    }

    public function get_day(): int
    {
        return $this->day;
    }

    public function set_year(): int
    {
        return $this->year;
    }

    public function get_year(): int
    {
        return $this->year;
    }

    public function displayDate(): string
    {
        return "$this->month/$this->day/$this->year";
    }
}



$date1= new Date(04, 16, 1983);

$date1->set_month(04);
echo $date1->get_month() . PHP_EOL;

$date1->set_day(016);
echo $date1->get_day() . PHP_EOL;

$date1->set_year(1943);
echo $date1->get_year() . PHP_EOL;

echo $date1->displayDate() . PHP_EOL;

/*
class TestClass
{
    public $var1 = 16;
    public $var2 = 'day';
}

var_dump(get_class_vars('Date'));
*/