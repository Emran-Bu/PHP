<?php

    $str = "I love <b>php</b> and I love <i>php</i>Tool";

    echo $str . "<br><br>";

    $strip_tags = strip_tags($str);

    echo "strip_tags: " . $strip_tags . "<br><br>";

    
    echo $str . "<br><br>";

    $strip_tags = strip_tags($str, "<b>");

    echo "strip_tags: " . $strip_tags . "<br><br>";

    $str = "This world is beautiful";
    echo wordwrap($str, 4 ,"<br>", TRUE);

?>