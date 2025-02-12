<?php
// app/Services/TodoService.php
namespace App\Services;

use App\Repositories\TodoRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Models\Todo;

class TodoService
{
    public function __construct(protected TodoRepositoryInterface $repo) {}

    public function list(int $perPage = 10): LengthAwarePaginator
    {
        return $this->repo->paginate($perPage);
    }

    public function get(int $id): ?Todo
    {
        return $this->repo->find($id);
    }

    public function create(array $data): Todo
    {
        return $this->repo->create($data);
    }

    public function update(int $id, array $data): bool
    {
        return $this->repo->update($id, $data);
    }

    public function delete(int $id): bool
    {
        return $this->repo->delete($id);
    }
}

