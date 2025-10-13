<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Grading System</title>
<style>
body {
  background: linear-gradient(135deg, #f7971e, #ffd200);
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
  background-color: #f7971e;
  color: white;
  cursor: pointer;
}
button:hover { background-color: #d67d00; }
a {
  display: block;
  margin-top: 15px;
  color: #f7971e;
  text-decoration: none;
}
</style>
</head>
<body>
<div class="card">
  <h2>📚 Simple Grading System</h2>
  <form method="post">
    <input type="number" name="math" placeholder="Math Score" required><br>
    <input type="number" name="english" placeholder="English Score" required><br>
    <input type="number" name="science" placeholder="Science Score" required><br>
    <button type="submit">Compute Grade</button>
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $math = $_POST["math"];
      $english = $_POST["english"];
      $science = $_POST["science"];
      $average = ($math + $english + $science) / 3;

      if ($average >= 90) $grade = "A";
      elseif ($average >= 80) $grade = "B";
      elseif ($average >= 70) $grade = "C";
      elseif ($average >= 60) $grade = "D";
      else $grade = "F";

      echo "<p>Average: <strong>$average</strong></p>";
      echo "<p>Grade: <strong>$grade</strong></p>";
  }
  ?>
  <a href="index.php">⬅ Back to Exercises</a>
</div>
</body>
</html>
