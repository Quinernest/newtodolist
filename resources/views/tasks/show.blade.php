<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Laravel App')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Task Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $task->title }}</h5>
            <p class="card-text">Status: {{ $task->completed ? 'Completed' : 'Not Completed' }}</p>

            <!-- Form to mark as completed/uncompleted -->
            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" class="btn {{ $task->completed ? 'btn-warning' : 'btn-success' }}">
                    {{ $task->completed ? 'Mark as Not Completed' : 'Mark as Completed' }}
                </button>
            </form>

            <!-- Back to List button -->
            <a href="{{ route('tasks.index') }}" class="btn btn-primary mt-2">Back to List</a>
        </div>
    </div>
</div>
</body>
</html>
