<?php


namespace App\Repository\Configurations;


use App\Models\Configurations\Office;

class OfficeRepository
{
    /**
     * @var Office
     */
    private $office;


    /**
     * OfficeRepository constructor.
     */
    public function __construct(Office $office)
    {
        $this->office = $office;
    }
    public function all()
    {
        $result = $this->office->orderBy('office_name','ASC')->get();
        return $result;
    }
    public function findById($id)
    {
        $result = $this->office->find($id);
        return $result;
    }
}