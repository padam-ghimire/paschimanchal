<?php


namespace App\Repository;

use App\Models\Applicant;




class ApplicantsRepository
{
    /**
     * @var Applicant
     */
    private $applicant;

    /**
     * ApplicantsRepository constructor.
     */
    public function __construct(Applicant $applicant)
    {

        $this->applicant = $applicant;
    }

    public function all()
    {
        $result = $this->applicant->orderBy('job_id','ASC')->get();
        return $result;
    }

    public function findById($id)
    {
        $result = $this->applicant->find($id);
        return $result;
    }
   
}