<?php


namespace App\Repository;


use App\Models\Slider;

class SliderRepository
{
    /**
     * @var Slider
     */
    private $slider;

    /**
     * SliderRepository constructor.
     */
    public function __construct(Slider $slider)
    {

        $this->slider = $slider;
    }

    public function all()
    {
        $result = $this->slider->orderBy('title','ASC')->get();
        return $result;
    }

    public function findById($id)
    {
        $result = $this->slider->find($id);
        return $result;
    }
   
}