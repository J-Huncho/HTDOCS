<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BMI Calculator</title>
<style>
body{font-family:'Poppins',sans-serif;background:linear-gradient(135deg,#84fab0,#8fd3f4);height:100vh;display:flex;justify-content:center;align-items:center;}
.card{background:#fff;border-radius:15px;padding:30px;text-align:center;box-shadow:0 8px 25px rgba(0,0,0,0.1);width:350px;}
input{border:2px solid #00b894;padding:8px;border-radius:8px;width:80%;margin:5px;}
button{background:#00b894;color:#fff;border:none;padding:10px 20px;border-radius:10px;cursor:pointer;font-weight:bold;margin-top:10px;}
button:hover{background:#009670;}small{color:gray;display:block;margin-top:15px;}
</style>
</head>
<body>
<div class="card">
<h2>⚖️ BMI Calculator</h2>
<form method="POST">
  <input type="number" step="any" name="weight" placeholder="Weight (kg)" required><br>
  <input type="number" step="any" name="height" placeholder="Height (m)" required><br>
  <button type="submit">Calculate</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $w=$_POST["weight"];
  $h=$_POST["height"];
  $bmi=$w/($h*$h);
  $bmi=round($bmi,2);
  echo "<hr><p>Your BMI: <strong>$bmi</strong></p>";
}
?>
<button onclick="window.location.href='index.php'">⬅ Back to Exercises</button>
<small>— Made by Juztin 💡</small>
</div>
</body>
</html>
