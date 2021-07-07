<?php

    function hello($a, $b)
    {
        echo $a + $b . "<br>";
    }

    hello(5,10);
    hello(5,10);
    hello(5,10);

?>

<br>

<?php

    function hel($name){
        echo "Hello $name";
    }

    hel("World");

?>
<br>
<?php

    function hell($name, $title){
        echo "Hello $name $title <br>";
    }

    hell("World", "s");
    hell("Bill", "Gates");

?>
<br>
<?php

    function hellos($a = "Emran", $b = "Hasan")
    {
        echo $a. " " . $b . "<br>";
    }

    hellos();
    hellos("Hello", "World");
    hellos(15,10);

?>
<br>
<?php

    function sum($c = 10, $d = 10)
    {
        echo "the sum is: " . $c + $d ."<br>";
        echo "the sub is: " . $c - $d ."<br>";
    }

    sum();
    sum(50,50);
    sum(70, 20);
?>