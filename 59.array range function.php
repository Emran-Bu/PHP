<?php

    $newArray = range(0, 100, 10);

    echo "<pre>";
    print_r($newArray);
    echo "<pre>";


?>
<br>
<?php

    $newArray = range("a", "z", 2);

    echo "<pre>";
    print_r($newArray);
    echo "<pre>";


?>
<br>
<?php

    foreach(range("a", "z") as $letter){
        echo $letter . ", ";
    }

?>