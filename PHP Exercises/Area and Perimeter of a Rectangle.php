<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Area and Perimeter of a Rectangle</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #a18cd1, #fbc2eb);
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
      color: #6a00f4;
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
      border: 2px solid #6a00f4;
      border-radius: 8px;
      width: 80%;
      font-size: 16px;
      text-align: center;
    }
    button {
      background-color: #6a00f4;
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
      background-color: #4800b8;
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
    <h2>📏 Area & Perimeter</h2>

    <form method="POST">
      <input type="number" name="length" placeholder="Enter length" required><br>
      <input type="number" name="width" placeholder="Enter width" required><br>
      <button type="submit">Calculate</button>
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $length = $_POST["length"];
        $width = $_POST["width"];

        $area = $length * $width;
        $perimeter = 2 * ($length + $width);

        echo "<hr>";
        echo "<p>Area: <strong>$area</strong></p>";
        echo "<p>Perimeter: <strong>$perimeter</strong></p>";
      }
    ?>

    <button onclick="window.location.href='index.php'">⬅ Back to Exercises</button>
    <small>— Made by Juztin 💡</small>
  </div>
</body>
</html>
