<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Task - To-Do App</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />

  <style>
    body {
      background: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c') no-repeat center center fixed;
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

    .container-view {
      background: rgba(0, 51, 102, 0.85);
      max-width: 600px;
      margin: 40px auto;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
      text-align: center;
    }

    h2 {
      margin-bottom: 20px;
    }

    .task-title {
      font-size: 1.8em;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .task-desc {
      font-size: 1.2em;
      margin-bottom: 20px;
    }

    /* Toggle Switch Styling */
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
      margin-bottom: 20px;
    }

    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0; left: 0; right: 0; bottom: 0;
      background-color: #ccc;
      transition: 0.4s;
      border-radius: 34px;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 26px; width: 26px;
      left: 4px; bottom: 4px;
      background-color: white;
      transition: 0.4s;
      border-radius: 50%;
    }

    input:checked + .slider {
      background-color: #3399ff;
    }

    input:checked + .slider:before {
      transform: translateX(26px);
    }

    /* Label text */
    .status-label {
      font-weight: bold;
      font-size: 1.2em;
      color: #ddd;
      margin-left: 10px;
      vertical-align: middle;
    }

    .btn-back {
      display: inline-block;
      margin-top: 25px;
      padding: 10px 25px;
      font-size: 16px;
      color: #003366;
      background-color: #fff;
      border: none;
      border-radius: 6px;
      text-decoration: none;
      box-shadow: 0 0 5px rgba(0,0,0,0.3);
      transition: background-color 0.3s;
    }
    .btn-back:hover {
      background-color: #3399ff;
      color: white;
      text-decoration: none;
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

<div class="container-view">
  <h2>Task Details</h2>

  <div class="task-title">{{ $task->title }}</div>
  <div class="task-desc">{{ $task->description }}</div>

  <!-- Form to toggle task completion status -->
  <form method="POST" action="{{ route('tasks.update', $task->id) }}">
    @csrf

    <label class="switch" title="Toggle task status">
      <input
        type="checkbox"
        name="is_complete"
        value="1"
        onchange="this.form.submit()"
        {{ $task->is_complete ? 'checked' : '' }}
      />
      <span class="slider"></span>
    </label>
    <span class="status-label">{{ $task->is_complete ? 'Completed' : 'Pending' }}</span>

    <!-- Preserve title and description when submitting -->
    <input type="hidden" name="title" value="{{ $task->title }}">
    <input type="hidden" name="description" value="{{ $task->description }}">
  </form>

  <a href="{{ route('tasks.index') }}" class="btn-back">Back to Tasks</a>
</div>

</body>
</html>
