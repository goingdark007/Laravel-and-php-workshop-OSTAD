<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Task - To-Do App</title>
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
    }
    .navbar-inverse {
      background-color: #003366;
      border-color: #003366;
    }
    .navbar-inverse .navbar-nav > li > a,
    .navbar-inverse .navbar-brand {
      color: white;
    }
    .container-form {
      background: rgba(0, 51, 102, 0.85);
      max-width: 600px;
      margin: 40px auto;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
    }
    label {
      font-weight: bold;
    }
    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-top: 6px;
      margin-bottom: 15px;
      border: none;
      border-radius: 5px;
      color: black;             /* Make typed text black */
      background-color: #fff;   /* White background */
    }
    input[type="text"]:focus,
    textarea:focus {
      outline: none;
      box-shadow: 0 0 8px #3399ff;
    }
    .btn-primary {
      background-color: #3399ff;
      border-color: #3399ff;
      width: 100%;
      font-size: 18px;
      font-weight: bold;
      padding: 10px;
      border-radius: 6px;
      color: white;
    }
    .error-msg {
      color: #ff9999;
      margin-top: -10px;
      margin-bottom: 15px;
      display: block;
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
      <li><a href="{{ route('tasks.about') }}">About</a></li>
      <li><a href="#">Gallery</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
</nav>

<!-- FORM CONTAINER -->
<div class="container-form">
  <h2 class="text-center" style="margin-bottom: 25px;">Create Task</h2>

  <form method="POST" action="{{ route('tasks.store') }}">
    @csrf

    <label for="title">Title</label>
    <input
      type="text"
      id="title"
      name="title"
      value="{{ old('title') }}"
      placeholder="Enter task title"
      required
    />
    @error('title') <span class="error-msg">{{ $message }}</span> @enderror

    <label for="description">Description</label>
    <textarea
      id="description"
      name="description"
      rows="5"
      placeholder="Describe the task (optional)"
    >{{ old('description') }}</textarea>
    @error('description') <span class="error-msg">{{ $message }}</span> @enderror

    <button type="submit" class="btn btn-primary">Create Task</button>
  </form>
</div>

</body>
</html>
