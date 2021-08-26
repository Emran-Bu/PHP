<?php

    class MyClass{
        public $x, $y, $z;

        public function __construct($a=0, $b=0){
            $this->x = $a;
            $this->y = $b;
        }

        public function mySum(){
            $this->z = $this->x + $this->y;
            return $this->z;
        }
    }

    $emranH = new MyClass(200, 400);

    echo $emranH->mySum();

    // object

    $emran = new MyClass();

    $emran->x = 20;
    $emran->y = 20;

    echo $emran->mySum();

    // 
    echo "<br>";

    $emran = new MyClass();

    $emran->x = 20;
    $emran->y = 50;

    echo $emran->mySum();
    // 
    echo "<br>";

    $emran1 = new MyClass();

    $emran1->x = 50;
    $emran1->y = 50;

    echo $emran1->mySum();
    // 

?>