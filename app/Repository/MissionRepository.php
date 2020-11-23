<?php


namespace App\Repository;



use App\Models\Mission;


class MissionRepository
{
    /**
     * @var Mission
     */
    private $mission;

    /**
     * ServicesRepository constructor.
     */
    public function __construct(Mission $mission)
    {

        $this->mission = $mission;
    }

    public function all()
    {
        $result = $this->mission->orderBy('title','ASC')->get();
        return $result;
    }

    public function findById($id)
    {
        $result = $this->mission->find($id);
        return $result;
    }
   
}