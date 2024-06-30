<!DOCTYPE html>
<html>
    <head>
        <title>Addition Table</title>
        <style>
            table {
                border-collapse: collapse;
            }
            table th, td {
                border: 1px solid black;
                padding: 5px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <table>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 5; $j++) {
                    echo "<td>" . $i . " + " . $j . " = " . ($i + $j) . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>
