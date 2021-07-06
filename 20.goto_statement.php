<?php

    echo "goto label <br>";
    echo "goto label <br>";
    echo "goto label <br>";
    goto abc;
    echo "goto label <br>";
    echo "goto label <br>";
    echo "goto label <br>";

    abc:
    echo "Hey This is abc label.<br><br>";

    for ($i=1; $i <= 10; $i++) { 

        if ($i == 4) {
            goto ac;
        }
        echo "Hello World<br>";

    }

    ac:
    echo "This is goto label";

?>