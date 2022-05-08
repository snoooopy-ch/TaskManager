<?php
namespace App\Services;

use App\Repositories\ProjectRepositoryInterface;
use App\Services\Service;
use Psr\Log\LoggerInterface as Log;


/**
 * Class ProjectService
 * @package App\Services
 */
class ProjectService extends Service {

    /**
     * @var ProjectRepositoryInterface
     */
    protected $project;
    /**
     * @var Log
     */
    protected $logger;

    /**
     * @param ProjectRepositoryInterface $Project
     * @param Log $logger
     */
    public function __construct(ProjectRepositoryInterface $project, Log $logger)
    {
        $this->project = $project;
        $this->logger = $logger;
    }

    public function projects() {
        return $this->project->all();
    }

}