<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
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
                'unit_type'=> "Count",
                'description'=>'Count of the Decks',
            ],
            [
                'unit_type'=> "Count",
                'description'=>'Count of the Wheels',
            ],
            [
                'unit_type'=> "Count",
                'description'=>'Count of the Trucks ',
            ],
            [
                'unit_type'=> "Count",
                'description'=>'Count of the Hardware ',
            ],
        ];
        foreach($data as $u){
            \App\Unit::create($u);
        }
    }
}