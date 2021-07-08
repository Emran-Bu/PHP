<?php

    // local variable
    function local(){
        $a = 10;
        echo "Variable A inside function : $a <br>";
    }
    local();
    echo "Variable A outside function : $a <br>";


    // global variable
    $a = 15;
    function glb(){
        echo "Variable A inside function : $a <br>";
    }
    glb();
    echo "Variable A outside function : $a <br><br>";
    
    // 

    $x = 152;
    function gl(){
        global $x;
        echo "Variable A inside function : $x <br>";
    }
    gl();
    echo "Variable A outside function : $x <br>";

?>

<br>

<?php

    $num1 = 10;
    $num2 = 20;

    function sum(){
        global $num1, $num2;
        $num1 = $num1 + $num2;
        echo "total: " . $num1;
    }

    sum();

?>