<?php
function countPrimes($start, $end)
{
    if ($start < 2) {
        $start = 2; // Adjust start to 2 if it's less than 2 since 1 is not a prime number
    }

    $count = 0;

    for ($i = $start; $i <= $end; $i++) {
        $Prime = true;

        // Optimize loop bound to square root of $i
        $sqrt_i = sqrt($i);
        for ($j = 2; $j <= $sqrt_i; $j++) {
            // Optimize division check to only odd numbers greater than 2
            if ($j > 2 && $j % 2 == 0) {
                continue;
            }

            if ($i % $j == 0) {
                $Prime = false;
                break;
            }
        }

        if ($Prime) {
            $count++;
        }
    }

    return $count;
}

$start = 1;
$end = 1000;
$count = countPrimes($start, $end);
echo "There are $count prime numbers between $start and $end.";
