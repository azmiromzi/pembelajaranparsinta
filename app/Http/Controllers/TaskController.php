<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', ['tasks' => DB::table('tasks')->orderBy('id', 'desc')->get()]);
    }


    public function create()
    {

    }
    public function store(Request $request)
    {

        DB::table('tasks')->insert([
            'list' => $request->list
        ]);

        return back();
    }

    public function edit($id)
    {
        $task = DB::table('tasks')->where('id', $id)->first();
        return view('tasks.edit', ['task' => $task]);
        // dd($task);
    }

    public function update($id, Request $request)
    {
        DB::table('tasks')->where('id', $id)->update([
            'list' => $request->list
        ]);
        return redirect('tasks');
    }

    public function destroy($id, Request $request)
    {
        Db::table('tasks')->where('id', $id)->delete();

        return back();
    }
}
