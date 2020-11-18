<?php


namespace App\Repository;


use App\Models\Slider;
use App\Models\Service;
use App\Models\BoardMember;

class ServicesRepository
{
    /**
     * @var Service
     */
    private $service;

    /**
     * ServicesRepository constructor.
     */
    public function __construct(Service $service)
    {

        $this->service = $service;
    }

    public function all()
    {
        $result = $this->service->orderBy('title','ASC')->get();
        return $result;
    }

    public function findById($id)
    {
        $result = $this->service->find($id);
        return $result;
    }
   
}