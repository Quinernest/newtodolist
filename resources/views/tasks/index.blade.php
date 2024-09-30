<!DOCTYPE html>
<html>
<head>
    <title>Laravel To-Do List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Laravel To-Do List</h1>

    <!-- Form to add new task -->
    <form action="{{ route('tasks.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="input-group">
            <input type="text" name="title" class="form-control" placeholder="New Task" required>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </div>
    </form>

    <!-- List of tasks -->
    <ul class="list-group">
        @foreach ($tasks as $task)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <!-- Checkbox to mark as completed -->
                <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="checkbox" class="form-check-input" {{ $task->completed ? 'checked' : '' }} 
                           onchange="this.form.submit()">
                    <span class="{{ $task->completed ? 'text-decoration-line-through' : '' }}">
                        {{ $task->title }}
                    </span>
                </form>

                <div class="d-flex">
                    <!-- View button -->
                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info btn-sm mx-2">View</a>

                    <!-- Edit button -->
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm mx-2">Edit</a>
                    
                    <!-- Delete button -->
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

</div>
</body>
</html>
