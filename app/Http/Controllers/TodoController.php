<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index(){
    	$todos = Todo::all();
    	return view('todos', compact('todos'));
    }
    public function store(Request $request){
        $todo = new Todo();
        $todo->todo = $request->todo;
        $todo->save();
        return redirect()->back();
    }
    public function delete($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->back();
    }
    public function edit($id){
   $todo = Todo::find($id);
   return view('update', compact('todo'));
    }
    public function update(Request $request, $id){
        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->save();
        return redirect()->route('todo');

    }
    public function complete($id){
        $todo = Todo::find($id);
        $todo->completed = 1;
        $todo->save();
        return redirect()->back();
    }
}
