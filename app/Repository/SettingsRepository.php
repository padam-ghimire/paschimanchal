<?php


namespace App\Repository;

use App\Models\Settings;




class SettingsRepository
{
    /**
     * @var Settings
     */
    private $settings;

    /**
     * SettingsRepository constructor.
     */
    public function __construct(Settings $settings)
    {

        $this->settings = $settings;
    }

    public function all()
    {
        $result = $this->settings->get();
        return $result;
    }

    public function findById($id)
    {
        $result = $this->settings->find($id);
        return $result;
    }
   
}