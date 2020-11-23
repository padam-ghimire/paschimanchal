<?php


namespace App\Repository;


use App\Models\Map;

class MapRepository
{
    /**
     * @var Map
     */
    private $map;

    /**
     * MapRepository constructor.
     */
    public function __construct(Map $map)
    {

        $this->map = $map;
    }

    public function all()
    {
        $result = $this->map->orderBy('link','ASC')->get();
        return $result;
    }

    public function findById($id)
    {
        $result = $this->map->find($id);
        return $result;
    }
   
}