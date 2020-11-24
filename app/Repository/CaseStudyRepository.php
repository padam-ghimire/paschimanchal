<?php


namespace App\Repository;

use App\Models\CaseStudy;






class CaseStudyRepository
{
    /**
     * @var CaseStudy
     */
    private $case;

    /**
     * CaseStudyRepository constructor.
     */
    public function __construct(CaseStudy $case)
    {

        $this->case = $case;
    }

    public function all()
    {
        $result = $this->case->orderBy('title','ASC')->get();
        return $result;
    }

    public function findById($id)
    {
        $result = $this->case->find($id);
        return $result;
    }
   
}