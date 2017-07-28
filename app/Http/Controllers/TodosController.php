<?php

namespace App\Http\Controllers;

use Session;
use App\Todo;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index() {
      // Grabs all todos
    	$todos = Todo::all();

      // Return to a view
    	return view('todos')->with('todos', $todos);

    }

    // Stroring new todo
    public function store(Request $request) {

    	// dd($request->all());

      // Initial for grabing a new todo
    	$todo = new Todo;

      // Passing a new todo from a request to database
    	$todo->todo = $request->todo;

      // Save the new todo
    	$todo->save();

      // Notify if Successfuly created
    	Session::flash('success', 'New todo was created.');

      //Back to previous view
      return redirect()->back();

    }

    // Deleting view
    public function delete($id) {

      // grabing a todo id
    	$todo = Todo::find($id);

      // deleleting a todo with a todo id
    	$todo->delete();

      // Notify if success
    	Session::flash('success', 'Successfuly deleted.');

      // Return to previous view
    	return redirect()->back();

    }

    // return an update view
    public function update($id) {

      // Grabing an id
    	$todo = Todo::find($id);
      // notify
    	Session::flash('success', 'Updated!');
      // return to update view
    	return view('update')->with('todo', $todo);

    }

    // Save new todos
    public function save(Request $request, $id) {

      //grabing todo's id
    	$todo = Todo::find($id);

      // passing the requested todo to database
    	$todo->todo = $request->todo;

      // save the new data
    	$todo->save();

      // redirect to route todos
    	return redirect()->route('todos');

    }

    //State of todo
    public function completed($id) {

      // grabing todo's id
    	$todo = Todo::find($id);

      // change the state
    	$todo->completed = 1;
      // save the new state
    	$todo->save();
      // notify
    	Session::flash('success', 'Good Job!');

      //return to previes view
    	return redirect()->back();

    }
}
