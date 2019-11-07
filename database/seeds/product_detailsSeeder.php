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
               'product_id'=>2,
               'color'=>'black',
               'instock'=>50,
               'sold'=>100,
               'image1'=>'/img/allproduct/denim/stretch-denim-1.jpg',
               'image2'=>'/img/allproduct/denim/stretch-denim-2.jpg',
               'image3'=>'/img/allproduct/denim/stretch-denim-3.jpg',
               'image4'=>'/img/allproduct/denim/stretch-denim-4.jpg',
               'image5'=>'/img/allproduct/denim/stretch-denim-5.jpg',

//               'created_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh'),
//               'updated_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh')



           ]
       ];
        DB::table('product_details')->insert($data);
    }
}
