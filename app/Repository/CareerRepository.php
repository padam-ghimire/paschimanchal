<?php


namespace App\Repository;

use App\Models\Career;






class CareerRepository
{
    /**
     * @var Career
     */
    private $career;

    /**
     * CareerRepository constructor.
     */
    public function __construct(Career $career)
    {

        $this->career = $career;
    }

    public function all()
    {
        $result = $this->career->orderBy('title','ASC')->get();
        return $result;
    }

    public function findById($id)
    {
        $result = $this->career->find($id);
        return $result;
    }
   
}