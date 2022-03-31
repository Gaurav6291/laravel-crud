<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
   
    public function index()
    {
        //
    }

    public function create()
    {
        return view('todo_create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'f_name'=> 'required | max:8 | min:3',
            'l_name'=> 'required'
        ]);

       $res = new Todo();
       $res -> f_name=$request->input('f_name');
       $res -> l_name=$request->input('l_name');
       $res -> save();

       $request->session()->flash('msg', 'Data Submitted');
       return redirect('todo_show');
    }

    public function show(Todo $todo)
    {
        return view('todo_show')->with('todoArr', Todo::all());
    }

    public function edit(Todo $todo, $id)
    {
        return view('todo_edit')->with('todoArr', Todo::find($id));
    }

    public function update(Request $request, Todo $todo)
    {
        $res = Todo::find($request->id);
        $res -> f_name=$request->input('f_name');
        $res -> l_name=$request->input('l_name');
        $res -> save();
 
        $request->session()->flash('msg', 'Data Updated');
        return redirect('todo_show');
    }

    public function destroy(Todo $todo, $id)
    {
        Todo::destroy(array('id', $id));
       return redirect('todo_show');
    }
}
