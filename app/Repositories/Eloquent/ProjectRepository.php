<?php

namespace App\Repositories\Eloquent;

use App\Models\Project;
use App\Repositories\ProjectRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ProjectRepository implements ProjectRepositoryInterface {
    protected $project;

    public function __construct(Project $project) {
        $this->project = $project;
    }

    public function all(): Collection {
        return $this->project->all();
    }
}