<?php

// app/Http/Controllers/TodoController.php
namespace App\Http\Controllers;

use App\Services\TodoService;
use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;

class TodoController extends Controller
{
    public function __construct(protected TodoService $service) {}

    public function index()
    {
        $todos = $this->service->list(15);
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(StoreTodoRequest $request)
    {
        $this->service->create($request->validated());
        return redirect()->route('todos.index')
            ->with('success', 'Задача добавлена');
    }

    public function edit(int $id)
    {
        $todo = $this->service->get($id) ?? abort(404);
        return view('todos.edit', compact('todo'));
    }

    public function update(UpdateTodoRequest $request, int $id)
    {
        $this->service->update($id, $request->validated());
        return redirect()->route('todos.index')
            ->with('success', 'Задача обновлена');
    }


    public function destroy(int $id)
    {
        $this->service->delete($id);
        return redirect()->route('todos.index')
            ->with('success', 'Задача удалена');
    }
}

