<?php
function primeSum($arr) {
    $max_val = max($arr);
    $prime = array_fill(0, $max_val + 1, true);
    $prime[0] = false;
    $prime[1] = false;

    for ($p = 2; $p * $p <= $max_val; $p++) {
        if ($prime[$p]) {
            for ($i = $p * 2; $i <= $max_val; $i += $p) {
                $prime[$i] = false;
            }
        }
    }

    $sum = 0;
    foreach ($arr as $num) {
        if ($prime[$num]) {
            $sum += $num;
        }
    }

    return $sum;
}

// Example usage
$arr = [1, 2, 3, 4, 5, 6, 7];
echo "Sum of prime numbers in the array: " . primeSum($arr);
?>
