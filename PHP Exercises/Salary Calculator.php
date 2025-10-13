<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Salary Calculator</title>
<style>
body{font-family:'Poppins',sans-serif;background:linear-gradient(135deg,#f6d365,#fda085);height:100vh;display:flex;justify-content:center;align-items:center;}
.card{background:#fff;border-radius:15px;padding:30px;text-align:center;box-shadow:0 8px 25px rgba(0,0,0,0.1);width:350px;}
input{border:2px solid #f77f00;padding:8px;border-radius:8px;width:80%;margin:5px;}
button{background:#f77f00;color:#fff;border:none;padding:10px 20px;border-radius:10px;cursor:pointer;font-weight:bold;margin-top:10px;}
button:hover{background:#d16300;}small{color:gray;display:block;margin-top:15px;}
</style>
</head>
<body>
<div class="card">
<h2>💰 Salary Calculator</h2>
<form method="POST">
  <input type="number" name="basic" placeholder="Basic Salary" required><br>
  <input type="number" name="allowance" placeholder="Allowance" required><br>
  <input type="number" name="deduction" placeholder="Deduction" required><br>
  <button type="submit">Compute</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $basic=$_POST["basic"];
  $allowance=$_POST["allowance"];
  $deduction=$_POST["deduction"];
  $net=$basic+$allowance-$deduction;
  echo "<hr><p>Net Salary: <strong>₱$net</strong></p>";
}
?>
<button onclick="window.location.href='index.php'">⬅ Back to Exercises</button>
<small>— Made by Juztin 💡</small>
</div>
</body>
</html>
