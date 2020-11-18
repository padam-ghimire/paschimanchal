<?php


namespace App\Repository;


use App\Models\WhyWe;
use App\Models\Slider;
use App\Models\BoardMember;

class WhyWeRepository
{
    /**
     * @var WhyWe
     */
    private $whyWe;

    /**
     * WhyWeRepository constructor.
     */
    public function __construct(WhyWe $whyWe)
    {

        $this->whyWe = $whyWe;
    }

    public function all()
    {
        $result = $this->whyWe->orderBy('title','ASC')->get();
        return $result;
    }

    public function findById($id)
    {
        $result = $this->whyWe->find($id);
        return $result;
    }
   
}