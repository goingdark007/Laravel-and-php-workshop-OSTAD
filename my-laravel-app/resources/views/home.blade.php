<!DOCTYPE html>
<html lang="en">
<head>
  <title>To-Do App | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    body {
      background-image: url('https://images.unsplash.com/photo-1506784983877-45594efa4cbe?auto=format&fit=crop&w=1950&q=80');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      color: white;
      min-height: 100vh;
    }
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .jumbotron {
      background-color: rgba(0, 51, 102, 0.8);
      color: white;
      margin-top: 30px;
    }
    .navbar-inverse {
      background-color: #003366;
      border-color: #003366;
    }
    .navbar-inverse .navbar-nav>li>a,
    .navbar-inverse .navbar-brand {
      color: #fff;
    }
    footer {
      background-color: #002244;
      color: white;
      padding: 25px;
      position: absolute;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('tasks.index')}}">To-Do App</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('home_page') }}">Home</a></li>
        <li><a href="{{ route('tasks.about') }}">About</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <div class="container">
    <h1>Welcome to Your To-Do App</h1>
    <p>Organize your day, track your tasks, and get things done!</p>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary btn-lg">Create New Task</a>
  </div>
</div>

<footer class="text-center">
  <p>Developed by Nazmul | Laravel Blade UI</p>
</footer>

</body>
</html>
