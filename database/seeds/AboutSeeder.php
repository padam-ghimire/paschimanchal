<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->truncate();
        $rows = [

            [
                'title' => 'About Us',
                'description' => 'Paschimanchal Solution Pvt. Ltd. was incorporated in 2010 and in the relatively short period of time since its inception, it has established as a major Optical fiber networking and engineering services in Nepal with a substantial amount of business generated from the wire line. It has established a good working relationship with the key telecom and network players such as NTC, Ncell, China Comservice (C.C.S) Nepal Pvt. Ltd, United Telecom (UTL) and different ISP and Cable TV Networks, private/government entities and emerging new industry players In doing so, the company has also employed highly technical, well disciplined, foreign trained, and field tested and experienced manpower to handle all fiber telecommunication jobs with a professional’s touch.',
               
               
            ],
        ];
        DB::table('abouts')->insert($rows);
    }
}
