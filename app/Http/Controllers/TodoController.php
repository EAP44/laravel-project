<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index (Todo $todo)
    {
        $todolist = Todo::all();
        return view('Pages.Todo',compact('todolist'));
    }
    public function store (Request $request)
    {
        $validate = request()->validate([
            'title'=>'required',
            'description'=>'nullable'
        ]);
        try {
            Todo::create($validate);
            return redirect('/todo-list');
        } catch (\Throwable $th) {
            return 'error';
        }
    }
    public function update (Todo $todo)
    {
        try {
            if($todo->state){
              $todo->update(['state'=>false]);
            }else{
                $todo->update(['state'=>true]);
            }
            return redirect('/todo-list');
        } catch (\Throwable $th) {
            return 'error';
        }
    }
    public function destroy (Todo $todo)
    {
        try {
            $todo->delete();
            return redirect('/todo-list');
        } catch (\Throwable $th) {
            return 'error';
        }
    }
}
