<?php


namespace App\Repository;


use App\Models\About;

class AboutRepository
{
    /**
     * @var About
     */
    private $about;

    /**
     * AboutRepository constructor.
     */
    public function __construct(About $about)
    {

        $this->about = $about;
    }

    public function all()
    {
        $result = $this->about->orderBy('description','ASC')->get();
        return $result;
    }

    public function findById($id)
    {
        $result = $this->about->find($id);
        return $result;
    }
   
}