<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Swapping Variables</title>
<style>
body {font-family:'Poppins',sans-serif;background:linear-gradient(135deg,#a1c4fd,#c2e9fb);height:100vh;display:flex;justify-content:center;align-items:center;}
.card {background:#fff;border-radius:15px;padding:30px;text-align:center;box-shadow:0 8px 25px rgba(0,0,0,0.1);width:350px;}
button {background:#007bff;color:#fff;border:none;padding:10px 20px;border-radius:10px;cursor:pointer;font-weight:bold;margin-top:10px;}
input {border:2px solid #007bff;padding:8px;border-radius:8px;width:80%;margin:5px;}
button:hover{background:#0056c2;}small{color:gray;display:block;margin-top:15px;}
</style>
</head>
<body>
<div class="card">
<h2>🔄 Swap Variables</h2>
<form method="POST">
  <input type="text" name="a" placeholder="Enter first value" required><br>
  <input type="text" name="b" placeholder="Enter second value" required><br>
  <button type="submit">Swap</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $a=$_POST["a"];
  $b=$_POST["b"];
  $temp=$a;
  $a=$b;
  $b=$temp;
  echo "<hr><p>After swapping:<br>A = <strong>$a</strong><br>B = <strong>$b</strong></p>";
}
?>
<button onclick="window.location.href='index.php'">⬅ Back to Exercises</button>
<small>— Made by Juztin 💡</small>
</div>
</body>
</html>
