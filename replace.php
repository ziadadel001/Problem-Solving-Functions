<?php

function replaceArrayValues(array $array, array $searchStrings, array $replacementStrings): array
{
    // Validate input parameters
    if (!is_array($array) || empty($array) || count($searchStrings) !== count($replacementStrings)) {
        return []; // Return empty array if input parameters are not valid
    }

    // Loop through each element of the array
    foreach ($array as $key => $value) {
        // Check if the current element matches any of the search strings
        if (in_array($value, $searchStrings)) {
            // Get the index of the matching search string
            $index = array_search($value, $searchStrings);
            // Replace the element with the corresponding replacement string
            $array[$key] = $replacementStrings[$index];
        }
    }

    // Return the modified array
    return $array;
}

// Test the function with sample data
$array = [2, 5, 6, 8, 9, 9, 9, 9, 9, 4, 5, 7, 6, 'ziad', 'adel', 'gomaa'];
$searchStrings = [9];
$replacementStrings = [5];

echo '<pre>';
print_r(replaceArrayValues($array, $searchStrings, $replacementStrings));
