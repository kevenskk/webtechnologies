<?php
session_start();
if (isset($_SESSION['loggedin']))
  header("Location: submit.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Open+Sans:wght@300;400;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
 
  <title>About Me</title>
  <style>
  </style>
</head>

<body>

  <header class="header">
    <h2 class="logo"><a href="index.html">Web Technologies</a></h2>
    <ul class="navmenu">
      <li><a href="index.html">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="weather.html">Weather Forecast</a></li>
      <li><a href="list.php">Publication</a></li>
      <li><a class="active" href="session.php">Login</a></li>
    </ul>
  </header>



  <div class="smallspacer layer4">


    <div class="login-page">
      <div class="logincontainer">

        <form class="login-form" action="login.php" method="POST">
          <input type="text" placeholder="Enter your username..." name="username" id="username" required/>
          <input type="password" placeholder="Enter your password..." name="password" id="password"  required/>
          <input type="submit" value="Login">

        </form>
      </div>
    </div>






























</body>

</html>