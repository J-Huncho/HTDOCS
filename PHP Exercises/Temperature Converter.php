<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Temperature Converter</title>
<style>
body {
  font-family: Arial, sans-serif;
  background: linear-gradient(135deg, #4e54c8, #8f94fb);
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}
.card {
  background: #fff;
  padding: 2em;
  border-radius: 20px;
  text-align: center;
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
  width: 350px;
}
button, input {
  padding: 10px;
  margin-top: 10px;
  border-radius: 10px;
  border: none;
  font-size: 1em;
}
button {
  background-color: #6c63ff;
  color: white;
  cursor: pointer;
}
button:hover {
  background-color: #4b47d6;
}
.back {
  margin-top: 15px;
  display: inline-block;
  text-decoration: none;
  color: #6c63ff;
}
</style>
</head>
<body>
<div class="card">
  <h2>🌡️ Temperature Converter</h2>
  <form method="post">
    <input type="number" name="celsius" placeholder="Enter °C" required>
    <button type="submit">Convert</button>
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $celsius = $_POST["celsius"];
      $fahrenheit = ($celsius * 9/5) + 32;
      echo "<p><strong>$celsius °C = $fahrenheit °F</strong></p>";
  }
  ?>
  <a href="index.html" class="back">⬅ Back to Exercises</a>
</div>
</body>
</html>
