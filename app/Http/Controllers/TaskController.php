<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;



class TaskController extends Controller
{
    public function index()
    {

        return view('tasks.index', [
            'tasks' => Task::orderBy('id', 'desc')->get(),
             'task'=> new Task,
             'submit' => 'create'
            ]);
    }


    public function create()
    {

    }
    public function store(TaskRequest $request)
    {

        Task::create($request->all());

        return back();
    }

    public function edit(Task $task)
    {
        // dd($task);
        return view('tasks.edit', [
            'task' => $task,
            'submit' => 'update'
        ]);
    }

    public function update($id, TaskRequest $request)
    {
        Task::find($id)->update([
            'list' => $request->list,
            'mark' => false
        ]);
        return redirect('tasks');
    }

    public function destroy($id, Request $request)
    {
        Task::find($id)->delete();

        return back();
    }
}
