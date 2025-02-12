<?php

namespace App\Repositories;

use App\Models\Todo;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface TodoRepositoryInterface
{
    public function paginate(int $perPage = 10): LengthAwarePaginator;
    public function find(int $id): ?Todo;
    public function create(array $data): Todo;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
