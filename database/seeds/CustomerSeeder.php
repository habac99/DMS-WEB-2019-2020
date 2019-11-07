<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('en_US');
        $limit = 20;
      //$lang = [User::LANG_JAPANESE, User::LANG_VIETNAMESE];

        for ($i = 0; $i < $limit; $i++) {
           // $randomKey = array_rand($lang);
            DB::table('customers')->insert([
                //'login_id' => $faker->unique()->ean8,
                'first_name' => $faker->firstname,
                'last_name'=>$faker->lastName,
                'phone_number'=>$faker->phoneNumber,
                'address'=>$faker->address,

                'password' => bcrypt('123456'),
                'email' => $faker->unique()->safeEmail,

                'created_at' => Carbon::now()->format('d-m-y H:i:s'),
                'updated_at' => Carbon::now()->format('d-m-y H:i:s'),
               // 'role_id' => Role::all()->random()->id,
            ]);
        }


    }
}
