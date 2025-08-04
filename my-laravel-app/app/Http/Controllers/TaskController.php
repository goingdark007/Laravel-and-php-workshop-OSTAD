<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){

        $data = Task::all();

        return view("task.index", compact("data"));
    }

    public function about(){

        return view("task.about");
    }

    public function create(){

        return view("task.create");
    }

    public function store(StoreTaskRequest $request){

        Task::create($request->validated());

        return redirect()->route('tasks.index')->with("success","Task Created");
    }

    public function show($id){

        $task = Task::findorFail($id);
        return view("task.view", compact("task"));
    }

    public function edit($id){

        $task = Task::findorFail($id);
        return view("task.edit", compact("task"));
    }

    public function update(StoreTaskRequest $request, $id){

        $task = Task::findorFail($id);
        $request->validated();
        $data = $request->all();
        $data['is_complete'] = isset($data['is_complete']) ? 1 : 0;
        $task->update($data);
        return redirect()->route('tasks.index')->with('success','Task updated');
    }

    public function destroy($id){

        Task::destroy($id);
        return redirect()->route('tasks.index')->with('success','Task deleted');
    }


}
