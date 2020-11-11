<?php


namespace App\Repository;


use App\Models\Slider;
use App\Models\BoardMember;

class BoardMemberRepository
{
    /**
     * @var BoardMember
     */
    private $boardMember;

    /**
     * SliderRepository constructor.
     */
    public function __construct(BoardMember $boardMember)
    {

        $this->boardMember = $boardMember;
    }

    public function all()
    {
        $result = $this->boardMember->orderBy('name','ASC')->get();
        return $result;
    }

    public function findById($id)
    {
        $result = $this->boardMember->find($id);
        return $result;
    }
   
}