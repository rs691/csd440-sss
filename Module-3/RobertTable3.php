<!-- Robert Stewart 1/19/2025 
  Module 3 Assignment 3.1 
 This assignment plays of of module 2. This  displays a random value in each cell. It requires the use of an external function to calculate the sum 
 of two random numbers. --> 


<!DOCTYPE html>
<html>
<head>
    <title>Module 3 Table With Random Sums</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
            width: 60px;
        }
    </style>
</head>
<body>
    <table>
        <?php
        // external function file that contains the calculateSum function and connects to this file
        require_once('externalFile.php');
        
        // Define table dimensions . Can be changed to any number of rows and columns
        $rows = 5;
        $cols = 5;
        
        // Create rows with a for loop and display the sum of two random numbers in each cell
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            
            // Create cells in each row with a for loop and display the sum of two random numbers
            for ($j = 0; $j < $cols; $j++) {
                // Generate two random numbers using the rand() function
                $num1 = rand(1, 50);
                $num2 = rand(1, 50);
                
                // Calculate sum using external function
                $sum = calculateSum($num1, $num2);
                
                // Display sum in the cell with tooltip showing the calculation
                echo "<td title='$num1 + $num2 = $sum'>$sum</td>";
            }
            // echo's thee end of the row
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>