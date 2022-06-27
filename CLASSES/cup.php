<?php

class Cup
{
    public string $color;
    public string $size;

    public function __construct(string $color, string $size)
    {
        $this->color = $color;
        $this->size = $size;

      //  var_dump($color);
      //  var_dump($size);

     //   var_dump($this);
}

public function getColor(): string
{
    return $this->color;
   // var_dump($this->color, $this->size);
}

    public function setColor(): string
    {
        return $this->color;
    }

}

//var_dump(new Cup('red', 'size'));


$cup = new Cup('red', '12');
$cup2 = new Cup('yellow', '8');

echo $cup2->getColor() . PHP_EOL;

$cup2->setColor('blue');

echo $cup2->setColor() . PHP_EOL;

//$cup->abc();
