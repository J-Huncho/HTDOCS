<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bank Account Simulation</title>
<style>
body {
  background: linear-gradient(135deg, #43cea2, #185a9d);
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
  background-color: #185a9d;
  color: white;
  cursor: pointer;
}
button:hover { background-color: #14487f; }
a {
  display: block;
  margin-top: 15px;
  color: #185a9d;
  text-decoration: none;
}
</style>
</head>
<body>
<div class="card">
  <h2>🏦 Bank Account Simulation</h2>
  <form method="post">
    <input type="number" name="balance" placeholder="Initial Balance" required><br>
    <input type="number" name="deposit" placeholder="Deposit Amount" required><br>
    <input type="number" name="withdraw" placeholder="Withdraw Amount" required><br>
    <button type="submit">Update Balance</button>
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $balance = $_POST["balance"];
      $deposit = $_POST["deposit"];
      $withdraw = $_POST["withdraw"];
      $new_balance = $balance + $deposit - $withdraw;
      echo "<p><strong>Updated Balance: ₱" . number_format($new_balance, 2) . "</strong></p>";
  }
  ?>
  <a href="index.php">⬅ Back to Exercises</a>
</div>
</body>
</html>
