<?php

    $a = 280;
    $b = 270;
    $c = 60;

    switch (true) {

        case ($a > $b and $a > $c):
            echo $a . " is greater";
            break;

        case ($b > $a and $b > $c):
            echo $b . " is greater";
            break;

        case ($c > $a and $c > $b):
            echo $c . " is greater";
            break;
        
        default:
            echo "no number";
            break;
    }
?>

<?php

    $day = date("j");
    switch($day):

        case 0:
            echo "saturday";
            break;
        case 1:
            echo "sunday";
            break;

        case 2:
            echo "monday";
            break;
        case 3:
            echo "tuesday";
            break;

        case 4:
            echo "wednesday";
            break;
        case 5:
            echo "thursday";
            break;
        case 6:
            echo "friday";
            break;

        default:
            echo "invalid";
        endswitch;
?>