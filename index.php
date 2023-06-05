<!DOCTYPE html>
<html>
<head>
  <title>Form Action and Canvas Application</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    h1 {
      margin-bottom: 20px;
      text-align: center;
    }
    form {
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      margin-top: 10px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    canvas {
      display: block;
      border: 1px solid #ccc;
      margin: 0 auto;
    }
  </style>
</head>
<body>
  <h1>Form Action Example</h1>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
    // Handle POST form submission
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Process the data or perform any necessary operations

    // Redirect to a thank you page or display a success message
    header("Location: thank-you.php");
    exit();
  } elseif ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["name"]) && isset($_GET["email"])) {
    // Handle GET form submission
    $name = $_GET["name"];
    $email = $_GET["email"];

    // Process the data or perform any necessary operations

    // Redirect to a thank you page or display a success message
    header("Location: thank-you.php");
    exit();
  }
  ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" target="_self">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">

    <input type="submit" value="Submit">
  </form>

  <canvas id="myCanvas" width="400" height="400"></canvas>

  <script>
    const canvas = document.getElementById("myCanvas");
    const ctx = canvas.getContext("2d");

    ctx.fillStyle = "red";
    ctx.fillRect(50, 50, 200, 200);

    ctx.strokeStyle = "blue";
    ctx.lineWidth = 5;
    ctx.strokeRect(100, 100, 150, 150);

    ctx.beginPath();
    ctx.arc(200, 200, 100, 0, 2 * Math.PI);
    ctx.fillStyle = "yellow";
    ctx.fill();
    ctx.closePath();

    ctx.font = "30px Arial";
    ctx.fillStyle = "black";
    ctx.textAlign = "center";
    ctx.fillText("Hello, Canvas!", canvas.width / 2, 350);
  </script>
</body>
</html>
