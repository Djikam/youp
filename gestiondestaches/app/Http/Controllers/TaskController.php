<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        return Task::where('user_id', Auth::id())->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'nullable',
            'dateFin' => 'required|date',
            'status' => 'required|in:pending,in_progress,completed'
        ]);

        $task = new Task($request->all());
        $task->user_id = Auth::id();
        $task->save();

        return response()->json($task, 201);
    }

    public function show($id)
    {
        $task = Task::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return response()->json($task);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'nullable',
            'dateFin' => 'required|date',
            'status' => 'required|in:pending,in_progress,completed'
        ]);
        $task = Task::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $task->update($request->all());

        return response()->json($task);
    }

    public function destroy($id)
    {
        $task = Task::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $task->delete();

        return response()->json(null, 204);
    }
}
