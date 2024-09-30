@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Task Details</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $task->title }}</h5>
            <p class="card-text">Status: {{ $task->completed ? 'Completed' : 'Not Completed' }}</p>
            <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
