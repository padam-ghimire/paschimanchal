<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $rows = [

            [
                'user_group_id' => 1,
                'name' => 'Paschimanchal',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin123'),
                'designation_id'=>1,
                'user_status'=>'active',
            ],
        ];
        DB::table('users')->insert($rows);
    }
}
