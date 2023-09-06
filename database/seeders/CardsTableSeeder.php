<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cards')->delete();
        
        \DB::table('cards')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Google',
                'image' => 'images/google.jpg',
                'link' => 'https://www.google.com',
                'btn' => 'google',
                'description' => 'google',
                'order' => 1,
                'created_at' => NULL,
                'updated_at' => '2023-09-02 13:26:36',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'wordpress',
                'image' => 'images/wordpress.png',
                'link' => 'https://wordpress.com/fr/',
                'btn' => 'wordpress',
                'description' => 'wordpress',
                'order' => 2,
                'created_at' => NULL,
                'updated_at' => '2023-09-02 13:54:31',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'esi-sba',
                'image' => 'images/esi-sba.png',
                'link' => 'https://www.esi-sba.dz/fr/',
                'btn' => 'esi-sba',
                'description' => 'esi-sba',
                'order' => 3,
                'created_at' => NULL,
                'updated_at' => '2023-09-02 13:59:49',
            ),
        ));
        
        
    }
}