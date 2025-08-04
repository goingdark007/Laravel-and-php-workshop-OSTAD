<!DOCTYPE html>
<html lang="en">
<head>
  <title>About - To-Do App</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />

  <style>
    body {
      background: url('https://images.unsplash.com/photo-1506784983877-45594efa4cbe?auto=format&fit=crop&w=1950&q=80') no-repeat center center fixed;
      background-size: cover;
      min-height: 100vh;
      color: white;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar-inverse {
      background-color: #003366;
      border-color: #003366;
    }
    .navbar-inverse .navbar-nav > li > a,
    .navbar-inverse .navbar-brand {
      color: white;
    }
    .container-about {
      background: rgba(0, 51, 102, 0.85);
      max-width: 700px;
      margin: 50px auto;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
      text-align: center;
    }
    h1 {
      font-weight: 700;
      margin-bottom: 20px;
      color: #3399ff;
    }
    p {
      font-size: 18px;
      line-height: 1.6;
      color: #d0e7ff;
    }
  </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('tasks.index') }}">To-Do App</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="{{ route('home_page') }}">Home</a></li>
      <li class="active"><a href="{{ route('tasks.about') }}">About</a></li>
      <li><a href="#">Gallery</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
</nav>

<!-- ABOUT CONTENT -->
<div class="container-about">
  <h1>Hi, I'm Nazmul</h1>
  <p>
    This is my mini project — a simple and elegant To-Do web application built with Laravel and Bootstrap.
    It helps you manage your tasks efficiently with an easy-to-use interface.
  </p>
  <p>
    I aimed for a clean blue theme and responsive design to provide a great user experience across devices.
  </p>
</div>

</body>
</html>
