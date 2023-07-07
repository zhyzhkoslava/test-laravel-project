<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $task = Task::with('statuses')->find(10);
        dd($task);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo 'create() of TaskController';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo 'store() of TaskController';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo 'show() of TaskController';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo 'edit() of TaskController';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo 'update() of TaskController';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo 'destroy() of TaskController';
    }
}
