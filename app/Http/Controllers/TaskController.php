<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index()
    {

        return view('tasks.index', [
            'task' => new Task,
            'submit' => 'Create',
            'tasks' => Task::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }


    public function store(TaskRequest $request)
    {
        // $request->validate([
        //         'list' => ['required', 'min:3', 'alpha'],
        //     ]);
        Task::create(
            $request->all()
        );
        return back();
        // return redirect('tasks');
    }

    public function edit(Task $task)
    {
        // $task = Task::find($id);
        // $task = Task::where('id', $id)->first();
        return view('tasks.edit', [
            'submit' => 'Update',
            'task' => $task
        ]);
    }

    public function update(TaskRequest $request, $id)
    {
        Task::find($id)->update(['list' => $request->list]);

        return redirect('tasks');
    }

    public function destroy($id)
    {
        Task::find($id)->delete();
        return back();
    }
}
