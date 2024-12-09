<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q2</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
        // Define an associative array with student details
        $students = [
            "Student1" => ["Name" => "Alice", "Program" => "BIP", "Age" => "21"],
            "Student2" => ["Name" => "Bob", "Program" => "BIS", "Age" => "20"],
            "Student3" => ["Name" => "Raju", "Program" => "BIT", "Age" => "22"]
        ];

        // Start the table
        echo "<table>";
        echo "<tr><th>Student</th><th>Name</th><th>Program</th><th>Age</th></tr>";

        // Use foreach loop to display the content of the $students array
        foreach ($students as $student => $details) {
            echo "<tr>";
            echo "<td>$student</td>";
            echo "<td>{$details['Name']}</td>";
            echo "<td>{$details['Program']}</td>";
            echo "<td>{$details['Age']}</td>";
            echo "</tr>";
        }

        // End the table
        echo "</table>";
    ?>
</body>
</html>
