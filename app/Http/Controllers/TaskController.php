<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', ['tasks' => Task::orderBy('id', 'desc')->get()]);
    }


    public function create()
    {

    }
    public function store(Request $request)
    {
        $request->validate([
            'list' => 'required'
        ]);
        Task::create($request->all());

        return back();
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
        // dd($task);
    }

    public function update($id, Request $request)
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
