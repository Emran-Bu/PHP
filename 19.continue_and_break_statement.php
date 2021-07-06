<?php

    for ($i=0; $i <= 10 ; $i++) { 

        if ($i == 3) {
            echo "Deleted <br>";
            continue;
        }
        echo "Number: " . $i . "<br>";
    }

?>

<br>

<?php

    for ($i=0; $i <= 10 ; $i++) { 

        if ($i == 5) {
            echo "Deleted <br>";
            break;
        }
        echo "Number: " . $i . "<br>";
    }

?>