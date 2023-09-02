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
        
        \DB::table('cards')->insert(
            [
                [
                    'name' => 'card1',
                    'image' => NULL,
                    'link' => 'http://cardlink1.com',
                    'btn' => 'btntitle',
                    'description' => 'card1',
                    'order' => 1,
                ],
                [
                    'name' => 'card2',
                    'image' => NULL,
                    'link' => 'http://cardlink2.com',
                    'btn' => 'btntitle2',
                    'description' => 'card2',
                    'order' => 2,
                ],
                [
                    'name' => 'card3',
                    'image' => NULL,
                    'link' => 'http://cardlink3.com',
                    'btn' => 'btntitle3',
                    'description' => 'card3',
                    'order' => 3,
                ],
            ],
        );
        
        
    }
}