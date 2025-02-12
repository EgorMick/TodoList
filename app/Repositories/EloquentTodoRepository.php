<?php

namespace App\Repositories;

use App\Models\Todo;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class EloquentTodoRepository implements TodoRepositoryInterface
{
    public function paginate(int $perPage = 10): LengthAwarePaginator
    {
        return Todo::orderBy('created_at', 'desc')->paginate($perPage);
    }

    public function find(int $id): ?Todo
    {
        return Todo::find($id);
    }

    public function create(array $data): Todo
    {
        return Todo::create($data);
    }

    public function update(int $id, array $data): bool
    {
        $todo = $this->find($id);
        return $todo ? $todo->update($data) : false;
    }

    public function delete(int $id): bool
    {
        $todo = $this->find($id);
        return $todo ? $todo->delete() : false;
    }
}

