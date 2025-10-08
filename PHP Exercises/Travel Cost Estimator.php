<?php
$distance = 150; // km
$fuel_consumption = 12; // km per liter
$fuel_price = 65; // per liter

$total_cost = ($distance / $fuel_consumption) * $fuel_price;

echo "Estimated Travel Cost: ₱" . round($total_cost, 2);
?>
