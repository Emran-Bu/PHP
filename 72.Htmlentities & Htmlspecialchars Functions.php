<?php

    echo "<u>htmlentities</u> <br>";
    $str = "A 'quote' is <b>bold</b>";

    echo $str . "<br>";

    echo htmlentities($str);

    echo "<br>";
    echo "<u>htmlentities ENT_QUOTES</u> <br>";
    echo htmlentities($str, ENT_QUOTES);

    echo "<br>";
    echo "<u>htmlentities ENT_QUOTES</u> <br>";
    echo htmlentities($str, ENT_NOQUOTES);

    echo "<br>";
    echo "<u>htmlentities ENT_QUOTES</u> <br>";
    echo htmlspecialchars($str, ENT_NOQUOTES);

    echo "<br>";
    echo "<u>htmlentities ENT_QUOTES</u> <br>";
    echo htmlspecialchars_decode($str);

?>

<br>

<?php

    echo "<pre>";
    print_r(get_html_translation_table(HTML_ENTITIES));
    echo "</pre>";

?>