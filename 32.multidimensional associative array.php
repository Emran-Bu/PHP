<?php

    $marks = [
        "emran" => [
            "Physics" => 85,
            "Chemistry" => 90,
            "Math" => 95
        ],

        "eshan" => [
            "Physics" => 82,
            "Chemistry" => 86,
            "Math" => 92
        ],

        "ehav" => [
            "Physics" => 86,
            "Chemistry" => 93,
            "Math" => 97
        ]

        ];

        echo "<table border= '1px' cellpadding = '15' cellspacing='0'>
            <tr>

                <th>Student Name</th>
                <th>Physics</th>
                <th>Chemistry</th>
                <th>Math</th>
                
            </tr>
        
        ";

        foreach($marks as $key => $value1){
            echo "<tr><td>$key</td>";

            foreach($value1 as $value2){
                echo "<td>$value2</td>";
            }
            echo "</tr>";
        }

        echo "</table>";

    echo "<pre>";
    print_r ($marks);
    echo "</pre>";

?>