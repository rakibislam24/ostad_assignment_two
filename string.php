<?php
// Array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Iterate over each string in the array
foreach ($strings as $string) {
    // Count vowels in the string
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $vowelCount = 0;
    //$strLower = strtolower($string); // Convert to lowercase to make the check case-insensitive
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $vowelCount++;
        }
    }

    // Reverse the string
    $reversedString = strrev($string);

    // Print the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n<br>";
}
?>
