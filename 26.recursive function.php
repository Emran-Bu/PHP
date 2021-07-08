<?php

    function test($number){
        if ($number <= 5) {
            echo "$number <br>";
            test($number + 1);
        }
    }
    test(1);

?>
<br>
<?php

    function factorial($number){
        if ($number === 1) {
            return 1;
        }
        return $number * factorial($number-1);
    }
    
    echo factorial(5);
?>
<br>
<?php

    
    function factori($number){
        $fact=1;
        for ($i=1; $i <=$number ; $i++) { 
            $fact = $fact * $i;
            
        }
        return $fact;
    }

    
    echo factori(5);
?>