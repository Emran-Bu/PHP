<?php

    $a = 1;

    while ($a <= 10) {
        echo $a;
        echo "hello ";
        
        $a++;
    }

?>

<br>

<?php

    $a = 10;
    echo "<ul>";
    while ($a >= 1) {

        echo "<li>" . "hello ($a</li>";
        
        $a--;
    }
    echo "</ul>";

?>

<br>

<?php

    $a = 1;
    while ($a <= 10) {

        echo $a . ") hello" . "<br>";
        
        $a = $a + 2;
    }

?>