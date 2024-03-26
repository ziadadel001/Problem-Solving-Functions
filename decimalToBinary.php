 <?php

    // Function to convert a positive decimal number to binary
    function decimalToBinaryPositive(int $decimalNumber): string
    {
        // Validate input: Ensure the input is a non-negative integer
        if (!is_int($decimalNumber) || $decimalNumber < 0) {
            return 'Invalid input'; // Return default message for invalid input
        }

        $binaryRepresentation = "";

        // Calculate the binary representation
        while ($decimalNumber > 0) {
            $binaryRepresentation = ($decimalNumber % 2) . $binaryRepresentation;
            $decimalNumber = (int)($decimalNumber / 2);
        }

        return $binaryRepresentation;
    }


    // Function to invert all bits in a binary number
    function invertBits(string $binary): string
    {
        $invertedBinary = "";

        // Invert each bit
        for ($i = 0; $i < strlen($binary); $i++) {
            $invertedBinary .= $binary[$i] === '0' ? '1' : '0';
        }

        return $invertedBinary;
    }
    function decimalToBinary(int $decimalNumber): string
    {
        $binaryRepresentation = "";

        // Check if the number is negative
        $isNegative = $decimalNumber < 0;

        // Convert negative numbers to their two's complement representation
        if ($isNegative) {
            // Invert all bits of the absolute value of the negative number
            $decimalNumber = abs($decimalNumber);
            $binaryRepresentation = invertBits(decimalToBinaryPositive($decimalNumber));

            // Pad the binary representation to the appropriate length
            $binaryRepresentation = str_pad($binaryRepresentation, 32, '1', STR_PAD_LEFT);

            // Take the least significant 32 bits
            $binaryRepresentation = substr($binaryRepresentation, -32);
        } else {
            // Convert positive number to binary using the provided code
            $binaryRepresentation = decimalToBinaryPositive($decimalNumber);
        }

        return $binaryRepresentation;
    }


    // Test the function with sample data
    $decimal = -100;
    $binaryString = decimalToBinary($decimal);
    echo $binaryString; // Output: 11111111111111111111111111110110




    
// //using decbin
// function decimalToBinary(int $decimalNumber): string
// {
//     // Check if the number is negative
//     $isNegative = $decimalNumber < 0;

//     // Convert negative numbers to their two's complement representation
//     if ($isNegative) {
//         $decimalNumber = abs($decimalNumber);
//         $decimalNumber = ~$decimalNumber + 1;
//     }

//     // Validate input: Ensure the input is an integer
//     if (!is_int($decimalNumber)) {
//         return 'Invalid input';
//     }

//     // Get binary representation with least significant 16 bits
//     $binaryRepresentation = str_pad(decbin($decimalNumber & 0xFFFF), 16, '0', STR_PAD_LEFT);

//     // If the original number was negative, prepend a sign bit (1 for negative)
//     if ($isNegative) {
//         $binaryRepresentation = '1' . substr($binaryRepresentation, -15); // Considering 16 bits including the sign bit
//     }

//     return $binaryRepresentation;
// }

// $decimal = -10;
// $binaryString = decimalToBinary($decimal);

// echo $binaryString; // Output: 1111111111110110
