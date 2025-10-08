<?php
$php = 1000;

$usd_rate = 0.018;
$eur_rate = 0.017;
$jpy_rate = 2.7;

echo "PHP to USD: $" . ($php * $usd_rate) . "<br>";
echo "PHP to EUR: €" . ($php * $eur_rate) . "<br>";
echo "PHP to JPY: ¥" . ($php * $jpy_rate);
?>
