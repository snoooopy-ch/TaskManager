<?php
namespace App\Services;

use App\Repositories\TaskRepositoryInterface;
use App\Services\Service;
use Psr\Log\LoggerInterface as Log;


/**
 * Class TaskService
 * @package App\Services
 */
class TaskService extends Service {

    /**
     * @var TaskRepositoryInterface
     */
    protected $task;
    /**
     * @var Log
     */
    protected $logger;

    /**
     * @param TaskRepositoryInterface $Task
     * @param Log $logger
     */
    public function __construct(TaskRepositoryInterface $task, Log $logger)
    {
        $this->task = $task;
        $this->logger = $logger;
    }

    public function tasks($project_id) {
        return $this->task->all($project_id);
    }

    public function updateTask($id, $attributes) {
        $this->task->update($id, $attributes);
    }

    public function create($details) {
        $this->task->create($details);
    }

    public function delete($id) {
        $this->task->delete($id);
    }
}