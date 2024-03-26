<?php
// Function to check if a player has won
function checkWinner($board)
{
    // Check for rows and columns
    for ($i = 0; $i < 3; $i++) {
        // Check rows
        if ($board[$i][0] != " " && $board[$i][0] == $board[$i][1] && $board[$i][1] == $board[$i][2]) {
            return $board[$i][0] . " is the winner"; // Return the winning player
        }
        // Check columns
        if ($board[0][$i] != " " && $board[0][$i] == $board[1][$i] && $board[1][$i] == $board[2][$i]) {
            return $board[0][$i] . " is the winner"; // Return the winning player
        }
    }

    // Check diagonals
    if ($board[0][0] != " " && $board[0][0] == $board[1][1] && $board[1][1] == $board[2][2]) {
        return $board[0][0] . " is the winner"; // Return the winning player for the main diagonal
    }
    if ($board[0][2] != " " && $board[0][2] == $board[1][1] && $board[1][1] == $board[2][0]) {
        return $board[0][2] . " is the winner"; // Return the winning player for the anti-diagonal
    }

    // No winner yet
    return null;
}

// Test the function
$board = [
    ['X', 'O', 'O'],
    ['O', 'O', 'O'],
    ['X', 'O', 'X']
];
echo checkWinner($board);
