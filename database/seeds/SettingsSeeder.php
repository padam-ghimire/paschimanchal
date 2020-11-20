<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->truncate();
        $rows = [

            [
                'phone' => '+977-9860162701',
                'address' => 'Duwakot,Bhaktapur',
                'email' => 'padamghimire75@gmail.com',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'youtube' => 'youtube.com',
                'linkedin' => 'linkedin.com',
                'logo'=>'logo.png'
               
               
            ],
        ];
        DB::table('settings')->insert($rows);
    }
}
