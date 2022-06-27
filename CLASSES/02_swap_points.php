<?php
/*
 Write a method named swapPoints that accepts two Points as parameters and swaps their x/y values.

Consider the following example code that calls swapPoints:

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);
$p1->swapPoints($p1, $p2);

echo "(" . $p1->x . ", " . $p1->y . ")";
echo "(" . $p2->x . ", " . $p2->y . ")";

The output produced from the above code should be:

(-3, 6)
(5, 2)

 */

class Point
{
    public int $a;
    public int $b;

    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
/*
        public function setA(): int {
            return $this->a;
        }

        public function setB(): int {
            return $this->b;
    }
*/
       public function swapPoints($x, $y): array
       {
          return list($x, $y) = [$y, $x];                    // $temp = $x;        $x = $y;        $y = $temp;
       }
}

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);

echo "(" . $p1->a . ", " . $p1->b . ")" . PHP_EOL;
echo "(" . $p2->a . ", " . $p2->b . ")" . PHP_EOL;

print_r($p1->swapPoints($p1, $p2));