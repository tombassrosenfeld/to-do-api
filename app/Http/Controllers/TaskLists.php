<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TaskList;

use App\Http\Resources\TaskListResource;
use App\Http\Resources\TaskListIndexResource;

class TaskLists extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TaskListResource::collection(TaskList::all());
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

        return TaskList::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TaskList $list)
    {
        return $list;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaskList $list)
    {
        $data = $request->all();
        $list->fill($data)->save();
        return $list;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskList $list)
    {
        $list->delete();
        return response(null, 204);
    }
}
