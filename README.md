# Problem Solving

This repository contains several PHP files, each containing a function that performs a specific task. Here's a brief overview of each file along with usage examples:

## Tic Tac Toe game.php

This file contains a function to check if a player has won in a Tic Tac Toe game. It iterates through the rows, columns, and diagonals of the game board to determine the winner.

**Usage Example:**
```php
// Test the function
$board = [
    ['X', 'O', 'O'],
    ['O', 'O', 'O'],
    ['X', 'O', 'X']
];
echo checkWinner($board);
   ```
## countLettersAndNumbers.php

This file includes a function to count the number of letters and numbers in a given string. It iterates through each character in the string and increments the count for letters and numbers accordingly.

**Usage Example:**
```php
// Test the function with a sample string
$test = countLettersAndNumbers('ziadadelgomaa 123456789  5577 z');

// Output the result
print_r($test);
```
## countPrimes.php

This file contains a function to count the number of prime numbers within a specified range. It utilizes a loop to check each number within the range and determines if it is prime.

**Usage Example:**
```php
// Set the range
$start = 1;
$end = 1000;

// Count the number of prime numbers between the range
$count = countPrimes($start, $end);

// Print the result
echo "There are $count prime numbers between $start and $end.";
```
## decimalToBinary.php

This file provides two functions. The first function converts a positive decimal number to its binary representation. The second function inverts all the bits of a binary number.

**Usage Example:**
```php
// Test the function with sample data
$decimal = -100;
$binaryString = decimalToBinary($decimal);
echo $binaryString; // Output: 1111111111110110
```
## replace.php

This file contains a function to replace specific values in an array with other values. It iterates through the array and replaces matching values with corresponding replacement values.

**Usage Example:**
```php
// Test the function with sample data
$array = [2, 5, 6, 8, 9, 9, 9, 9, 9, 4, 5, 7, 6, 'ziad', 'adel', 'gomaa'];
$searchStrings = [9,8];
$replacementStrings = [5,1];

echo '<pre>';
print_r(replaceArrayValues($array, $searchStrings, $replacementStrings));
