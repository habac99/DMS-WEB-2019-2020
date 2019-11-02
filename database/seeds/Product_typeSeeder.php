<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class Product_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'type_name'=>'denim',
                'description'=>'this is description',
                'image'=>'/img/denim-menu.png',
                'created_at' => Carbon::now()->format('d-m-y H:i:s'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s')
            ],
            [
                'type_name'=>'cargos',
                'description'=>'this is description',
                'image'=>'//img/cargo-menu.png',
                'created_at' => Carbon::now()->format('d-m-y H:i:s'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s')

            ],
            [
                'type_name'=>'shorts',
                'description'=>'this is description',
                'image'=>'/img/shprts-menu.png',
                'created_at' => Carbon::now()->format('d-m-y H:i:s'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s')

            ]


        ];
        DB::table('product_types')->insert($data);
    }
}
