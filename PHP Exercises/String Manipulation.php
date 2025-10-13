<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>String Manipulation</title>
<style>
body{font-family:'Poppins',sans-serif;background:linear-gradient(135deg,#f093fb,#f5576c);height:100vh;display:flex;justify-content:center;align-items:center;}
.card{background:#fff;border-radius:15px;padding:30px;text-align:center;box-shadow:0 8px 25px rgba(0,0,0,0.1);width:350px;}
textarea{border:2px solid #d0006f;padding:8px;border-radius:8px;width:80%;margin:5px;height:80px;resize:none;}
button{background:#d0006f;color:#fff;border:none;padding:10px 20px;border-radius:10px;cursor:pointer;font-weight:bold;margin-top:10px;}
button:hover{background:#9a0050;}small{color:gray;display:block;margin-top:15px;}
</style>
</head>
<body>
<div class="card">
<h2>✍️ String Manipulation</h2>
<form method="POST">
  <textarea name="sentence" placeholder="Enter a sentence" required></textarea><br>
  <button type="submit">Analyze</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $s=$_POST["sentence"];
  $chars=strlen($s);
  $words=str_word_count($s);
  $upper=strtoupper($s);
  $lower=strtolower($s);
  echo "<hr>
  <p>Characters: <strong>$chars</strong></p>
  <p>Words: <strong>$words</strong></p>
  <p>Uppercase: <strong>$upper</strong></p>
  <p>Lowercase: <strong>$lower</strong></p>";
}
?>
<button onclick="window.location.href='index.php'">⬅ Back to Exercises</button>
<small>— Made by Juztin 💡</small>
</div>
</body>
</html>
