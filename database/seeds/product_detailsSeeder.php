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
               'product_id'=>6,
               'color'=>'blue',
               'instock'=>50,
               'sold'=>100,
               'image1'=>'/img/allproduct/shorts/denim-shorts-1.jpg',
               'image2'=>'/img/allproduct/shorts/denim-shorts-2.jpg',
               'image3'=>'/img/allproduct/shorts/denim-shorts-3.jpg',
               'image4'=>'/img/allproduct/shorts/denim-shorts-4.jpg',
               'image5'=>'/img/allproduct/shorts/denim-shorts-5.jpg',

//               'created_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh'),
//               'updated_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh')



           ]
       ];
        DB::table('product_details')->insert($data);
    }
}
