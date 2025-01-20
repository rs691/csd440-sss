<!-- Robert Stewart 1/19/2025 
  Module 2 Assignment 2.1 
 This  displays a random value in each cell without using php to create the cells
  --> 

<!DOCTYPE html>
<html>
<head>
    <title>Module 2 Table with random numbers in the cells</title>
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
    <!-- Table tags in HTML and not PHP -->
    <table>
        <tbody>
            <!-- Start PHP for row generation -->
            <?php 
            $rows = 5;
            $cols = 5;
            // Loop through the rows
            for ($i = 0; $i < $rows; $i++) {
            ?>
                <tr>
                <?php
                for ($j = 0; $j < $cols; $j++) {
                    $randomNum = rand(1, 100);
                ?>
                    <td><?php echo $randomNum; ?></td>
                <?php
                }
                ?>
                </tr>
            <?php
            }
            ?>
            <!-- End PHP -->
        </tbody>
    </table>
</body>
</html>