<?php
function countLettersAndNumbers(string $string): array
{
    // Initialize variables to count letters and numbers
    $numLetters = 0;
    $numNumbers = 0;

    // Iterate through each character in the string
    foreach (str_split($string) as $char) {
        // Check if the character is a letter
        if (ctype_alpha($char)) {
            $numLetters++; // Increment letter count
        }
        // Check if the character is a number
        elseif (ctype_digit($char)) {
            $numNumbers++; // Increment number count
        }
    }

    // Return an associative array containing the counts of letters and numbers
    return compact('numLetters', 'numNumbers');
}

// Test the function with a sample string
$test = countLettersAndNumbers('ziadadelgomaa 123456789  5577 z');

// Output the result
echo '<pre>';
print_r($test);
