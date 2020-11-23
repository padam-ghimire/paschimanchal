<?php

use Illuminate\Database\Seeder;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maps')->truncate();
        $rows = [

            [
                'link' => 'https://maps.googleapis.com/maps/api/staticmap?center=27.720823,85.364906&zoom=8&scale=2&format=png&size=800x600&visual_refresh=true&maptype=roadmap&markers=color:black%7Clabel:H%7C27.720823,85.364906&key=AIzaSyBgNBYEwytGjFVZ7vkrkrtZC0kfoxB2KRQ',
            ],
        ];
        DB::table('maps')->insert($rows);
    }
}
