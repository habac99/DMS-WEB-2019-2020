<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $faker = Faker\Factory::create('en_US');
//        $limit = 20;
//      //$lang = [User::LANG_JAPANESE, User::LANG_VIETNAMESE];
//
//        for ($i = 0; $i < $limit; $i++) {
//           // $randomKey = array_rand($lang);
//            DB::table('customers')->insert([
//                //'login_id' => $faker->unique()->ean8,
//                'first_name' => $faker->firstname,
//                'last_name'=>$faker->lastName,
//                'phone_number'=>$faker->phoneNumber,
//                'address'=>$faker->address,
//
//                'password' => bcrypt('123456'),
//                'email' => $faker->unique()->safeEmail,
//
//                'created_at' => Carbon::now()->format('d-m-y H:i:s'),
//                'updated_at' => Carbon::now()->format('d-m-y H:i:s'),
//               // 'role_id' => Role::all()->random()->id,
//            ]);
//        }

        $data = [
            [
                'first_name' => 'ha',
                'last_name'  => 'bac',
                'email' => 'admin1@gmail.com',
                'password'=> bcrypt(123456),
                'level' => 1,
                'phone_number'=>'0123456789',
                'address'=>'Queens, NY',
                'created_at' => Carbon::now()->format('d-m-y H:i:s'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s'),



            ],
            [
                'first_name' => 'Tony',
                'last_name'  => 'Stark',
                'email' => 'admin2@gmail.com',
                'password'=> bcrypt(123456),
                'level' => 1,
                'phone_number'=>'0123456789',
                'address'=>'Queens, NY',
                'created_at' => Carbon::now()->format('d-m-y H:i:s'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s'),



            ]
        ];
        customer::Insert($data);


    }
}
