<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\http\requests\TaskRequest;

class Tasks extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Task::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Task::create($data);
        return $this;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return $task;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task  )
    {
        $data = $request->all();
        $task->fill($data)->save();
        return $task;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return response(null, 204);
    }

    public function webShow(Task $task)
    {
        return view("task", [ "task" => $task ]);
    }

    public function webCreateTask(TaskRequest $request)
    {
        $data = $request->all();

        $task = Task::create($data);

        return redirect("/tasks/{$task->id}");
    }

}
