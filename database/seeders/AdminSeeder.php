<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4AYEN83MoCt0wtOpop8RM.7VKc/Nh6N45fOlsDJb1ApTx9zic14R6',
                'remember_token' => NULL,
                'created_at' => '2023-08-27 10:19:08',
                'updated_at' => '2023-08-27 10:19:08',
            ),
            
        ));
        
        
    }
}