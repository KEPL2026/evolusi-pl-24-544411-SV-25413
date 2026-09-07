<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // mengambil daftar tugas dari session
        $tasks = session('tasks', []);
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        // memvalidasi judul tugas sebelum disimpan 
        $request->validate(['title' => 'required|string|max:255']);

        $tasks = session('tasks', []);
        $tasks[] = $request->title;
        session(['tasks' => $tasks]);

        return redirect()->route('tasks.index');
    }
}