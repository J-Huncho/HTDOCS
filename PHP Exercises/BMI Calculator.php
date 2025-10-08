<?php
$weight = 60; // in kg
$height = 1.7; // in meters

$bmi = $weight / ($height * $height);
echo "BMI: " . round($bmi, 2);
?>
