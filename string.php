<?php
$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($str) {
    $str = strtolower($str);
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    $length = strlen($str); // Get the length once

    // Iterate through each character in the string
    for ($i = 0; $i < $length; $i++) {
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}

foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = strrev($string);
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString" . PHP_EOL;
}
?>