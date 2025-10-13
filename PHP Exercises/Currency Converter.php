<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Currency Converter</title>
<style>
body {
  background: linear-gradient(135deg, #00b09b, #96c93d);
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
input, select, button {
  padding: 10px;
  margin-top: 10px;
  border-radius: 10px;
  border: none;
}
button {
  background-color: #00b09b;
  color: white;
  cursor: pointer;
}
button:hover { background-color: #00907f; }
a {
  display: block;
  margin-top: 15px;
  color: #00b09b;
  text-decoration: none;
}
</style>
</head>
<body>
<div class="card">
  <h2>💱 Currency Converter</h2>
  <form method="post">
    <input type="number" name="amount" placeholder="Amount in PHP" required><br>
    <select name="currency" required>
      <option value="USD">USD</option>
      <option value="EUR">EUR</option>
      <option value="JPY">JPY</option>
    </select><br>
    <button type="submit">Convert</button>
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $amount = $_POST["amount"];
      $currency = $_POST["currency"];

      $usd_rate = 0.018;
      $eur_rate = 0.017;
      $jpy_rate = 2.65;

      switch ($currency) {
          case "USD": $converted = $amount * $usd_rate; break;
          case "EUR": $converted = $amount * $eur_rate; break;
          case "JPY": $converted = $amount * $jpy_rate; break;
      }

      echo "<p><strong>₱" . number_format($amount, 2) . "</strong> = <strong>" . number_format($converted, 2) . " $currency</strong></p>";
  }
  ?>
  <a href="index.php">⬅ Back to Exercises</a>
</div>
</body>
</html>
