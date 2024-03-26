# Problem Solving

This repository contains several PHP files, each containing a function that performs a specific task. Below is a brief overview of each file along with usage examples:

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

## countLettersAndNumbers.php

This file includes a function to count the number of letters and numbers in a given string. It iterates through each character in the string and increments the count for letters and numbers accordingly.

**Usage Example:**
```php
// Test the function with a sample string
$test = countLettersAndNumbers('ziadadelgomaa 123456789  5577 z');

// Output the result
echo '<pre>';
print_r($test);
