<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'category'=> "Deck",
                'description'=>'All Deck items',
            ],
            [
                'category'=> "Wheels",
                'description'=>'All Wheels items',
            ],
            [
                'category'=> "Trucks",
                'description'=>'All Trucks items',
            ],
            [
                'category'=> "Bearings",
                'description'=>'All Bearings items',
            ],
            [
                'category'=> "Hardware",
                'description'=>'All Hardware items',
            ],
        ];
        foreach($data as $c){
            \App\Category::create($c);
        }
    }
}
