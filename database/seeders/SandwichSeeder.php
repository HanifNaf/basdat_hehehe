<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SandwichSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sandwich = [
            ["name"=>"Veggie Delite", "price"=>25000, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')],
            ["name"=>"Spicy Italian", "price"=>45000, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')],
            ["name"=>"Chicken Teriyaki", "price"=>37500, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')],
            ["name"=>"Chicken Slice", "price"=>32000, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')]



        ];
        foreach($sandwich as $sand){
            DB::table('sandwich')->insert($sand);
        }
    }
}
