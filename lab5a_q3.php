<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        // Function to calculate the area of a rectangle
        function calculateArea($length, $width) {
            // Calculate the area
            $area = $length * $width;
            return $area;
        }

        // Example values for length and width
        $length = 10; // Replace with your desired value
        $width = 5;   // Replace with your desired value

        // Call the function and store the result
        $area = calculateArea($length, $width);

        // Display the result
        echo "<h1>Calculate Area of a Rectangle</h1>";
        echo "<p>Length: $length</p>";
        echo "<p>Width: $width</p>";
        echo "<p>Area: $area</p>";
    ?>
</body>
</html>
