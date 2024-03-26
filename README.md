
 **file Tic Tac Toe game** 
contains a PHP implementation of the Tic Tac Toe game. It includes a function called `checkWinner` which checks if a player has won the game based on the current state of the board.

The `checkWinner` function iterates through the rows, columns, and diagonals of the game board to determine if there is a winning combination. If a winning combination is found, the function returns a string indicating the winning player ("X" or "O"). If there is no winner yet, the function returns `null`.

Below is a sample usage of the `checkWinner` function where a predefined game board is passed to it to check for the winner:

```php
$board = [
    ['X', 'O', 'O'],
    ['O', 'O', 'O'],
    ['X', 'O', 'X']
];
echo checkWinner($board);
