<?php
$str = "I love learning PHP.";

echo "Number of characters: " . strlen($str) . "<br>";
echo "Number of words: " . str_word_count($str) . "<br>";
echo "Uppercase: " . strtoupper($str) . "<br>";
echo "Lowercase: " . strtolower($str);
?>
