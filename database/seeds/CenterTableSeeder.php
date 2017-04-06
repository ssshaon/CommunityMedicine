<?php

use Illuminate\Database\Seeder;

class CenterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $data=[
//        ' user_id' => 1,
        'Name' => str_random(10) ,
        'District'=>str_random(10),
    'Thana'=>str_random(10),
//        'user_password' => Auth::user()->password,
    ];
        DB::table('centers')->insert($data);
    }
}
