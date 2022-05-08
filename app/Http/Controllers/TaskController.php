<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TaskService;
use App\Services\ProjectService;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use App\Models\Project;

class TaskController extends Controller
{
    protected $taskService;
    protected $projectService;

    public function __construct(TaskService $taskService, ProjectService $projectService) {
        $this->taskService = $taskService;
        $this->projectService = $projectService;
    }

    public function index() {
        $projects = $this->projectService->projects();
        return redirect()->route('task', ['project' => $projects[0]->id]);
    }

    public function tasks(Request $request) {
        $default = $request->input('project')?? 1;
        $tasks = $this->taskService->tasks($default);
        $projects = $this->projectService->projects();
        return view('task')
            ->withSelectedProject($default)
            ->withTasks($tasks)
            ->withProjects($projects);
    }

    public function create(StoreTaskRequest $request) {
        $params = $request->only('name', 'priority', 'project_id');
        $this->taskService->create($params);

        return redirect()->back()->with('success', 'Created successfully')->withInput();
    }

    public function delete(Request $request) {
        $this->taskService->delete($request->route('id'));
        return response()->json(['status' => 'success']);
    }

    public function edit(UpdateTaskRequest $request) {
        $params = $request->only('name', 'priority', 'project_id');
        $this->taskService->updateTask($request->route('id'), $params);
        return response()->json(['status' => 'success']);
    }

    public function update_priority(Request $request) {
        foreach ($request->order as $order) {
            $this->taskService->updateTask($order['id'], ['priority' => $order['position']]);
        }
    	return response()->json(['status'=>'success']);
    }
}
