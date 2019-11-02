<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class product_detailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $data = [
           [
               'product_id'=>1,
               'color'=>'black',
               'instock'=>50,
               'sold'=>100,
               'image'=>'img/allproduct/denim/m1-denim-black-1.jpg, img/allproduct/denim/m1-denim-black-2.jpg, img/allproduct/denim/m1-denim-black-3.jpg, img/allproduct/denim/m1-denim-black-4.jpg, img/allproduct/denim/m1-denim-black-5.jpg',
//               'created_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh'),
//               'updated_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh')



           ]
       ];
        DB::table('product_details')->insert($data);
    }
}
