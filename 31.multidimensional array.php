<?php

    $emp = [
        [1, "bills", "manager", 20000],
        [2, "steve", "accountant", 17000],
        [3, "jackson", "salesman", 12000],
        [4, "ella", "operator", 9000]
    ];

    echo $emp[0][0] . " ";
    echo $emp[0][1] . " ";
    echo $emp[0][2] . " ";
    echo $emp[0][3] . " ";
    echo "<br>";
    echo $emp[1][0] . " ";
    echo $emp[1][1] . " ";
    echo $emp[1][2] . " ";
    echo $emp[1][3] . " ";
    echo "<br>";
    echo "<br>";

    //for loop 

    $emp = [
        [1, "bills", "manager", 20000],
        [2, "steve", "accountant", 17000],
        [3, "jackson", "salesman", 12000],
        [4, "ella", "operator", 9000]
    ];


    for($row = 0; $row < 4; $row++){
        for($col = 0; $col < 4; $col++){
            echo $emp [$row] [$col] . " ";
        }
        echo "<br>";
    }

    echo "<br>";

    // foreach loop

    $emp = [
        [1, "bills", "manager", 20000],
        [2, "steve", "accountant", 17000],
        [3, "jackson", "salesman", 12000],
        [4, "ella", "operator", 9000]
    ];

    echo "<table border='1px' cellpadding = '10' cellspacing = '0'>";
    echo "
            <tr>
                <th>Emp Id.</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Salary</th>
            </tr>
        ";
    foreach($emp as $value1){
        echo "<tr>";
        foreach($value1 as $value2){
            echo "<td> $value2 </td>";
        }
        echo "</tr>";
    }
    echo "
            <tfoot>
                <tr>
                    <td colspan='3'>Total =</td>
                    <td>58,000</td>
                </tr>
            </tfoot>
        ";
    echo "</table>";

    echo "<pre>";
    print_r ($emp);
    echo "</pre>";

?>