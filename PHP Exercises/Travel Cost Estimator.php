<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Travel Cost Estimator</title>
<style>
body {
  background: linear-gradient(135deg, #ff416c, #ff4b2b);
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: Poppins, sans-serif;
}
.card {
  background: white;
  padding: 30px;
  border-radius: 20px;
  text-align: center;
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
  width: 400px;
}
input, button {
  padding: 10px;
  margin-top: 10px;
  border-radius: 10px;
  border: none;
}
button {
  background-color: #ff416c;
  color: white;
  cursor: pointer;
}
button:hover { background-color: #d9365a; }
a {
  display: block;
  margin-top: 15px;
  color: #ff416c;
  text-decoration: none;
}
</style>
</head>
<body>
<div class="card">
  <h2>🚗 Travel Cost Estimator</h2>
  <form method="post">
    <input type="number" step="0.1" name="distance" placeholder="Distance (km)" required><br>
    <input type="number" step="0.1" name="fuel" placeholder="Fuel Consumption (km/l)" required><br>
    <input type="number" step="0.1" name="price" placeholder="Fuel Price per Liter" required><br>
    <button type="submit">Calculate Cost</button>
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $distance = $_POST["distance"];
      $fuel = $_POST["fuel"];
      $price = $_POST["price"];

      $cost = ($distance / $fuel) * $price;
      echo "<p>Total Travel Cost: <strong>₱" . number_format($cost, 2) . "</strong></p>";
  }
  ?>
  <a href="index.php">⬅ Back to Exercises</a>
</div>
</body>
</html>