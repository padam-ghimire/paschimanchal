<?php


namespace App\Repository;

use App\Models\News;
use App\Models\Client;




class NewsRepository
{
    /**
     * @var News
     */
    private $news;

    /**
     * NewsRepository constructor.
     */
    public function __construct(News $news)
    {

        $this->news = $news;
    }

    public function all()
    {
        $result = $this->news->orderBy('title','ASC')->get();
        return $result;
    }

    public function findById($id)
    {
        $result = $this->news->find($id);
        return $result;
    }
   
}