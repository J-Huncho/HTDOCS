<?php
$name = "Juztin";
$age = 21;
$color = "blue";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduce Yourself</title>
    <style>
        :root {
            --fav-color: <?php echo $color; ?>;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: radial-gradient(circle at top left, #f6f9ff, var(--fav-color));
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            overflow: hidden;
        }

        .card {
            background: #fff;
            border-radius: 25px;
            box-shadow: 10px 10px 0 var(--fav-color), 0 0 15px rgba(0, 0, 0, 0.15);
            padding: 50px 40px;
            width: 380px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 12px 12px 0 var(--fav-color), 0 0 25px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 26px;
            margin-bottom: 20px;
            color: var(--fav-color);
            letter-spacing: 1px;
        }

        p {
            font-size: 17px;
            line-height: 1.6;
        }

        .highlight {
            color: var(--fav-color);
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            margin-top: 25px;
            background: var(--fav-color);
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 10px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background: #222;
            transform: scale(1.08);
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            filter: blur(70px);
            opacity: 0.6;
            z-index: -1;
        }

        .circle.one {
            width: 250px;
            height: 250px;
            top: -60px;
            left: -60px;
            background: var(--fav-color);
        }

        .circle.two {
            width: 300px;
            height: 300px;
            bottom: -70px;
            right: -70px;
            background: #007bff;
        }

        footer {
            margin-top: 30px;
            font-size: 13px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="circle one"></div>
    <div class="circle two"></div>

    <div class="card">
        <h1>Hey there! 👋</h1>
        <p>
            <?php
            echo "Hi, I'm <span class='highlight'>$name</span>. I'm <span class='highlight'>$age</span> years old and my favorite color is <span class='highlight'>$color</span>.";
            ?>
        </p>
        <a href="index.php" class="btn">Back to Exercises</a>
        <footer>— Made by <?php echo $name; ?> 💡</footer>
    </div>
</body>
</html>
