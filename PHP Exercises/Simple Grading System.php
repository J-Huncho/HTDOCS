<?php
$math = 85;
$english = 90;
$science = 80;

$average = ($math + $english + $science) / 3;

if ($average >= 90) {
    $grade = "A";
} elseif ($average >= 80) {
    $grade = "B";
} elseif ($average >= 70) {
    $grade = "C";
} elseif ($average >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}

echo "Average: " . round($average, 2) . "<br>";
echo "Grade: $grade";
?>
