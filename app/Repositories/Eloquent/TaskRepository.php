<?php

namespace App\Repositories\Eloquent;

use App\Models\Task;
use App\Repositories\TaskRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class TaskRepository implements TaskRepositoryInterface {
    protected $task;

    public function __construct(Task $task) {
        $this->task = $task;
    }

    public function all(): Collection {
        return $this->task->all();
    }

    public function findById($id) {
        return $this->task->find($id);
    }

    public function update($id, $attributes) {
        $item = $this->findById($id);
        $item->update($attributes);
    }

    public function create($details) {
        $this->task->create($details);
    }

    public function delete($id) {
        return $this->task->destroy($id);
    }
}