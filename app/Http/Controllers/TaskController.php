<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = session('tasks', []);
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate(['title' => 'required|string|max:255']);

        $tasks = session('tasks', []);
        $tasks[] = $request->title;
        session(['tasks' => $tasks]);

        return redirect()->route('tasks.index');
    }
}