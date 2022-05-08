<?php

namespace App\Repositories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;

interface TaskRepositoryInterface {
    public function all();

    public function update(int $id, array $attributes);

    public function findById(int $id);

    public function create(array $details);

    public function delete(int $id);
}