<?php


namespace App\Repository;

use App\Models\Project;





class ProjectsRepository
{
    /**
     * @var Project
     */
    private $project;

    /**
     * ProjectsRepository constructor.
     */
    public function __construct(Project $project)
    {

        $this->project = $project;
    }

    public function all()
    {
        $result = $this->project->orderBy('name','ASC')->get();
        return $result;
    }

    public function findById($id)
    {
        $result = $this->project->find($id);
        return $result;
    }
   
}