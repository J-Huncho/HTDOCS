<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Math</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #7b2ff7, #f107a3);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0;
    }
    .card {
      background: #fff;
      border-radius: 15px;
      padding: 30px;
      text-align: center;
      box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);
      max-width: 400px;
      width: 100%;
    }
    h2 {
      color: #5c00ff;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }
    form {
      margin-bottom: 20px;
    }
    input {
      padding: 8px;
      margin: 5px;
      border: 2px solid #5c00ff;
      border-radius: 8px;
      width: 80%;
      font-size: 16px;
      text-align: center;
    }
    button {
      background-color: #5c00ff;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 10px;
      cursor: pointer;
      font-weight: bold;
      transition: 0.3s;
      margin-top: 10px;
    }
    button:hover {
      background-color: #4000c7;
    }
    hr {
      border: 1px solid #eee;
      margin: 20px 0;
    }
    p {
      font-size: 16px;
      color: #333;
    }
    small {
      display: block;
      margin-top: 15px;
      color: gray;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>🧮 Simple Math</h2>

    <form method="POST">
      <input type="number" name="a" placeholder="Enter first number" required><br>
      <input type="number" name="b" placeholder="Enter second number" required><br>
      <button type="submit">Calculate</button>
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["a"];
        $b = $_POST["b"];

        $sum = $a + $b;
        $difference = $a - $b;
        $product = $a * $b;
        $quotient = $b != 0 ? round($a / $b, 2) : "Undefined (Division by Zero)";

        echo "<hr>";
        echo "<p>Sum: <strong>$sum</strong></p>";
        echo "<p>Difference: <strong>$difference</strong></p>";
        echo "<p>Product: <strong>$product</strong></p>";
        echo "<p>Quotient: <strong>$quotient</strong></p>";
      }
    ?>

    <button onclick="window.location.href='index.php'">⬅ Back to Exercises</button>
    <small>— Made by Juztin 💡</small>
  </div>
</body>
</html>
