<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //tạo dữ liệu mẫu cho bảng product
        $data = [
            [
                'product_name'=>'M1 DENIM',
                'description'=>'this is description',
                'unit_price'=>50,
                'type_id'=>3,
                'created_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh')



            ],
            [
                'product_name'=>'STRETCH DENIM',
                'description'=>'this is description',
                'unit_price'=>50,
                'type_id'=>3,
                'created_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh')



            ],
            [
                'product_name'=>'REPAIRED DENIM',
                'description'=>'this is description',
                'unit_price'=>50,
                'type_id'=>3,
                'created_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh')



            ],
            [
                'product_name'=>'X1 DENIM',
                'description'=>'this is description',
                'unit_price'=>50,
                'type_id'=>3,
                'created_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh')



            ],
            [
                'product_name'=>'M14 STRETCH DENIM',
                'description'=>'this is description',
                'unit_price'=>50,
                'type_id'=>3,
                'created_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh')



            ],
            [
                'product_name'=>'DENIM SHORTS',
                'description'=>'this is description',
                'unit_price'=>50,
                'type_id'=>3,
                'created_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s','Asia/Ho_Chi_Minh')



            ]



        ];
        DB::table('products')->insert($data);
    }
}
