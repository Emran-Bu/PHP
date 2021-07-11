<?php

        $emp = [
            [1, "bills", "manager", 20000],
            [2, "steve", "accountant", 17000],
            [3, "jackson", "salesman", 12000],
            [4, "ella", "operator", 9000]
        ];

        $emp = [

                    [
                        "Id" => 1,
                        "Name" => "bills",
                        "Designation" => "Manager",
                        "Salary" => 20000
                    ],

                    [
                        "Id" => 2,
                        "Name" => "Steves",
                        "Designation" => "Accountant",
                        "Salary" => 17000
                    ],

                    [
                        "Id" => 3,
                        "Name" => "elon",
                        "Designation" => "Salesman",
                        "Salary" => 12000
                    ],

                    [
                        "Id" => 4,
                        "Name" => "Jackson",
                        "Designation" => "Operator",
                        "Salary" => 15000
                    ],

                    [
                        "Id" => 5,
                        "Name" => "ella",
                        "Designation" => "supervisor",
                        "Salary" => 11000
                    ]

        ];


        echo "<table border= '1px' cellpadding= '15' cellspacing= '0'>
        
            <tr>

                <th>Std No.</th>
                <th>Name</th>
                <th>Design.</th>
                <th>Salary</th>
            
            </tr>
        
        ";
        foreach($emp as list("Id" => $id, "Name" => $name, "Designation" => $designation, "Salary" => $salary)){
            // echo $id, $name, $designation, $salary ."<br>";
            echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td></tr>";
        }
        echo "</table>";

?>