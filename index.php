<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        table {
            width: 60%;
            border: 1px solid #2F3645;
            border-collapse: collapse;
            margin: 3% auto;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        th {
            background: #1A4870;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th,
        td {
            padding: 4px;
            border: 1px solid #2F3645;
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Emp no.</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Salary</th>
        </tr>
        <?php

        
        $data1 = [
            [1, "Anisul islam", "Manager", 32000],
            [2, "Nustrat islam", "Employee", 30000],
            [3, "Forhad Hossain", "Employee", 32000],
        ];
        $data2 = [
            [
                "id" => 2,
                "name" => "Anisul islam",
                "position" => "Manager",
                "salary" => 32000
            ],
            [
                "id" => 3,
                "name" => "Nustrat islam",
                "position" => "Employee",
                "salary" => 30000
            ],
            [
                "id" => 4,
                "name" => "Forhad Hossain",
                "position" => "Employee",
                "salary" => 32000
            ],
        
        ];
        $data3 = [
            "Anisul islam" => [
                "id" => 3,
                "name" => "Anisul islam",
                "position" => "Manager",
                "salary" => 32000
            ],
            "Nustrat islam" => [
                "id" => 4,
                "name" => "Nustrat islam",
                "position" => "Employee",
                "salary" => 30000
            ],
            "Forhadn Hossain" => [
                "id" => 5,
                "name" => "Forhad Hossain",
                "position" => "Employee",
                "salary" => 32000
            ]
        ];
        foreach($data1 as $key => $data){
            echo "<tr>";
            foreach($data as $value){
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        }
       
        ?>
    </table>
</body>

</html>