<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\todo;

class todosController extends Controller
{
    public function index(){
        $todo=todo::all();
        
        $data=compact('todo');
        return view("welcome")->with($data);
    }

    public function completed(){
        $todo=todo::all()->where('isComplete', '=' , 1);

        
        $data=compact('todo');
        return view("welcome")->with($data);
    }

    public function incompleteHome(){
        $todo=todo::all()->where('isComplete', '=' , 0);

        
        $data=compact('todo');
        return view("welcome")->with($data);
    }

    public function markComplete($id){
        $todo=todo::find($id);
        $todo->isComplete = 1;
        $todo->save();

        $todo=todo::all()->where('isComplete', '=' , 1);

        
        $data=compact('todo');
        return view("welcome")->with($data);
    }

    public function store(Request $request){
        // print_r($request->all());

        $request->validate(
            [
                'name'=>'required',
                'work'=>'required|unique:todos,work',
                'isComplete' => 'required',
                'date'=>'required',
            ]
            );

                $todo=new todo;
                $todo->name=$request['name'];
                $todo->work=$request['work'];
                $todo->isComplete=$request['isComplete'];
                $todo->date=$request['date'];
                $todo->save();

            

            return redirect(route("todo.home"));
    }
    public function delete($id){
        todo::find($id)->delete();
        return redirect(route("todo.home"));
    }
    //
}
