<?php

        $emp = [
            [1, "bills", "manager", 20000],
            [2, "steve", "accountant", 17000],
            [3, "jackson", "salesman", 12000],
            [4, "ella", "operator", 9000]
        ];


        echo "<table border= '1px' cellpadding= '15' cellspacing= '0'>
        
            <tr>

                <th>Std No.</th>
                <th>Name</th>
                <th>Design.</th>
                <th>Salary</th>
            
            </tr>
        
        ";
        foreach($emp as list($id,$name,$designation,$salary)){
            // echo $id, $name, $designation, $salary ."<br>";
            echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td></tr>";
        }
        echo "</table>";

?>