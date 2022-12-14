<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SnackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $snack = [
            ["id_snack"=>3,"name"=>"snack 1", "price"=>1000, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')],
            ["id_snack"=>3,"name"=>"snack 2", "price"=>2000, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')],
            ["id_snack"=>3,"name"=>"snack 3", "price"=>3000, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')],
            ["id_snack"=>3,"name"=>"snack 4", "price"=>4000, "quantity"=>0, "image"=>"italian.png", "updated_at"=>date('Y-m-d H:i:s'), "created_at"=>date('Y-m-d H:i:s')]



        ];
        foreach($snack as $sna){
            DB::table('snack_details')->insert($sna);
        }
    }
}
