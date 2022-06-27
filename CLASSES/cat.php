<?php

class Cat {
    public string $name;
    public string $color;

    public function __construct(string $name, string $color )
    {
        $this->name = $name;
        $this->color = $color;

        var_dump($color);    // string(5) "black"

        var_dump($name);     // string(5) "MyCat"

        var_dump($this);    /*  object(Cat)#1 (2) {
                                    ["name"]=>
                                    string(5) "MyCat"
                                    ["color"]=>
                                    string(5) "black"
                                 }
*/
}

    public function get_color(): string
    {
        return $this->color;
    }
}

$cat = new Cat('MyCat', 'black');

echo $cat->get_color() . PHP_EOL;

