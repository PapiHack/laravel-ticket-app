<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    private $pages = [
        'index' => false,
        'list' => false,
        'create' => false,
        'about' => false,
    ];

    public function index()
    {
        $this->pages['index'] = true;
        return view('task.index', ['pages' => $this->pages]);
    }

    public function about()
    {
        $this->pages['about'] = true;
        return view('task.about', ['pages' => $this->pages]);
    }

    public function list()
    {
        $tasks = Task::all();
        $this->pages['list'] = true;
        return view('task.list', ['pages' => $this->pages, 'tasks' => $tasks]);
    }

    public function create(Request $request)
    {
        $this->pages['create'] = true;
        if ($request->isMethod('POST'))
        {
            $task = new Task;
            $data = $request->except(['_token']);
            $task->owner = $data['owner'];
            $task->name = $data['name'];
            $task->description = $data['description'];
            $task->status = $data['status'];
            $task->complete = array_key_exists('complete', $data) ? true : false;
            $task->save();
            return redirect()->route('task.list')->with('message', 'Task successfully created!');
        }
        return view('task.create', ['pages' => $this->pages]);
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('POST'))
        {
        }
        return view('task.update');
    }

    public function delete($id)
    {

    }
}
