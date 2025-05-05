<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        // route --> /lists/
       /* $tasks = Task::all(); */
       $tasks = Task::orderBy('created_at', 'desc')->get();

        return view('lists.index', ["tasks" => $tasks]);
      }
  
      public function show($id) {
        // route --> /lists/{id}
        // fetch a single record & pass into show view
      }
  
      public function create() {
        // route --> /lists/create
        // render a create view (with web form) to users
      }
  
      public function store() {
        // --> /lists/ (POST)
        // hanlde POST request to store a new ninja record in table
      }
  
      public function destroy($id) {
        // --> /lists/{id} (DELETE)
        // handle delete request to delete a ninja record from table
      }
  
      // edit() and update() for edit view and update requests
      // we won't be using these routes
}
