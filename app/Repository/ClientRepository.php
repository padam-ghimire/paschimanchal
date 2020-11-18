<?php


namespace App\Repository;

use App\Models\Client;




class ClientRepository
{
    /**
     * @var Client
     */
    private $client;

    /**
     * ServicesRepository constructor.
     */
    public function __construct(Client $client)
    {

        $this->client = $client;
    }

    public function all()
    {
        $result = $this->client->orderBy('name','ASC')->get();
        return $result;
    }

    public function findById($id)
    {
        $result = $this->client->find($id);
        return $result;
    }
   
}