<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task List - To-Do App</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />

  <!-- Background and Custom Styling -->
  <style>
    body {
      background: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c') no-repeat center center fixed;
      background-size: cover;
      color: #fff;
    }

    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    .jumbotron {
      background-color: rgba(0, 123, 255, 0.8);
      color: white;
      padding: 40px;
      margin-bottom: 0;
    }

    .table-container {
      background: rgba(255, 255, 255, 0.95);
      padding: 30px;
      border-radius: 10px;
      margin-top: 20px;
      color: #333;
    }

    .btn-custom {
      margin-right: 5px;
    }

    .table th,
    .table td {
      vertical-align: middle !important;
    }

    .success-message {
      background-color: #dff0d8;
      padding: 10px;
      border-left: 5px solid #3c763d;
      color: #3c763d;
      margin: 20px 0;
    }

    /* Strong blue background for the table header row */
    thead tr {
      background-color: #003366 !important; /* Strong dark blue */
      color: white;
      font-weight: bold;
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
        <li class="active"><a href="{{ route('home_page') }}">Home</a></li>
        <li><a href="{{ route('tasks.about') }}">About</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </nav>

  <!-- SUCCESS MESSAGE -->
  <div class="container">
    @if(session('success'))
    <div class="success-message">
      {{ session('success') }}
    </div>
    @endif
  </div>

  <!-- JUMBOTRON HEADER -->
  <div class="jumbotron text-center">
    <h1><span class="glyphicon glyphicon-list-alt"></span> Task List</h1>
    <p>Manage your daily tasks easily and efficiently</p>
    <a href="{{ route('tasks.create') }}" class="btn btn-lg btn-light btn-primary">+ Add Task</a>
  </div>

  <!-- TABLE LIST -->
  <div class="container table-container">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Description</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($data as $item)
        <tr>
          <td><strong>{{ $item->id }}</strong></td>
          <td>{{ $item->title }}</td>
          <td>{{ $item->description }}</td>
          <td>
            @if($item->is_complete)
            <span class="label label-success">Completed</span>
            @else
            <span class="label label-warning">Pending</span>
            @endif
          </td>
          <td>
            <a href="{{ route('tasks.edit', $item->id) }}" class="btn btn-info btn-xs btn-custom">
              <span class="glyphicon glyphicon-pencil"></span> Edit
            </a>
            <a href="{{ route('tasks.show', $item->id) }}" class="btn btn-primary btn-xs btn-custom">
              <span class="glyphicon glyphicon-eye-open"></span> View
            </a>
            <form action="{{ route('tasks.destroy', $item->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-xs btn-custom">
                <span class="glyphicon glyphicon-trash"></span> Delete
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
