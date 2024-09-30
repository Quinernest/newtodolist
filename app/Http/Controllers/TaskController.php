<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Display all tasks
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    // Store a new task
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);

        Task::create([
            'title' => $request->title,
        ]);

        return redirect()->route('tasks.index');
    }

   

    // Delete a task
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }

public function edit($id)
{
    $task = Task::findOrFail($id); // Find the task to edit
    return view('tasks.edit', compact('task')); // Pass task data to the edit view
}

public function update(Request $request, $id)
{
    $task = Task::findOrFail($id); // Find the task
    $task->update($request->validate([
        'title' => 'required|string|max:255', // Validate input
    ]));
    return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
}

public function show($id)
{
    $task = Task::findOrFail($id);
    return view('tasks.show', compact('task'));
}

}