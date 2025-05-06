<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Team;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        // route --> /lists/
       /* $tasks = Task::all(); */
       $tasks = Task::with('team')->orderBy('created_at', 'desc')->paginate(10);

        return view('lists.index', ["tasks" => $tasks]);
      }
  
      public function show($id) {
        // route --> /lists/{id}
        $task = Task::with('team')->findOrFail($id);
        // fetch a single record & pass into show view
        return view('lists.show', ["task" => $task]);
      }
  
      public function create() {
        // route --> /lists/create
        // render a create view (with web form) to users
        $teams = Team::all();
        return view('lists.create', ["teams" => $teams]);
      }
  
      public function store(Request $request) {
        // --> /lists/ (POST)
        // hanlde POST request to store a new task record in table
        $validated = $request->validate([
          'name' => 'required|string|max:255',
          'priority' => 'required|string|in:high,low',
          'description' => 'required|min:20|max:1000',
          'team_id' => 'required|exists:teams,id',
        ]);

        Task::create($validated);
        
        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
      }
  
      public function destroy(Task $task) {
        // --> /lists/{id} (DELETE)
        // handle delete request to delete a task record from table
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
      }
  
      // edit() and update() for edit view and update requests
      // we won't be using these routes
}
