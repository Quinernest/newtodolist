<!-- resources/views/tasks/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Task Title</label>
            <input type="text" name="title" value="{{ $task->title }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Update Task</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
