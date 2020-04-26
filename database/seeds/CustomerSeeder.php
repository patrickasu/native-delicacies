<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('customers')->insert([
        //     'fname' => 'Christian',
        //     'lname' => 'Abag',
        //     'email' => 'chrisabang@gmail.com',
        //     'phone_number' => '0818624574',
        //     'updated_at' => Carbon::now(),
        //     'created_at' => Carbon::now()
        // ]);

        $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('customers')->insert([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'updated_at' => $faker->dateTimeThisMonth,
                'created_at' => $faker->dateTimeThisMonth,
            ]);
        }
    }
}
