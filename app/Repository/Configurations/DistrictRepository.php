<?php


namespace App\Repository\Configurations;


use App\Models\Configurations\District;

class DistrictRepository
{
    /**
     * @var District
     */
    private $district;


    /**
     * DistrictRepository constructor.
     */
    public function __construct(District $district)
    {
        $this->district = $district;
    }

    public function all()
    {
        $result = $this->district->orderBy('district_code','ASC')->get();
        return $result;
    }
    public function findById($id)
    {
        $result = $this->district->find($id);
        return $result;
    }

}