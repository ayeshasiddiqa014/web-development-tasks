<?php
// Define the number of rows for the pattern
$rows = 8;

// Outer loop for rows
for ($i = 0; $i < $rows; $i++) {
    // Print spaces before the numbers
    for ($j = 0; $j < $rows - $i; $j++) {
        echo "  ";
    }

    // Inner loop for left half of the pattern
    for ($j = 0; $j <= $i; $j++) {
        echo (1 << $j) . " ";
    }

    // Inner loop for right half of the pattern
    for ($j = $i - 1; $j >= 0; $j--) {
        echo (1 << $j) . " ";
    }

    // Move to the next line
    echo "\n";
}
?>
