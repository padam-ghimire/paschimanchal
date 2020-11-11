<?php

use Illuminate\Database\Seeder;

class BoardMemeberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('board_members')->truncate();
        $rows = [

            [
                'designation_id' => 1,
                'name' => 'Tukka Dutta',
                'phone' => '01-43222',
                'facebook' =>'https://www.facebook.com/Paschimanchal-Solution-Pvt-Ltd-111318457329490' ,
                'image'=>1,
               
            ],
        ];
        DB::table('board_members')->insert($rows);
    


    $rows = [

        [
            'designation_id' => 1,
            'name' => 'Tukka Dutta',
            'phone' => '01-43222',
            'facebook' =>'https://www.facebook.com/Paschimanchal-Solution-Pvt-Ltd-111318457329490' ,
            'image'=>1,
           
        ],
    ];
    DB::table('board_members')->insert($rows);
}


    }

