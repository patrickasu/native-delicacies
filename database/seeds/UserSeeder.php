<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fname' => 'Timmy',
            'lname' => 'Andy',
            'email' => 'timmy@gmail.com',
            'password' => Hash::make('1111111111'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'fname' => 'Christian',
            'lname' => 'Lawson',
            'email' => 'christ@gmail.com',
            'password' => Hash::make('1111111111'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'fname' => 'Christian',
            'lname' => 'Lawson',
            'email' => 'christian@gmail.com',
            'password' => Hash::make('1111111111'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('users')->insert([
            'fname' => 'Gina',
            'lname' => 'James',
            'email' => 'gina@yahoo.com',
            'password' => Hash::make('1111111111'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('users')->insert([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' => $faker->email,
                'password' => Hash::make('1111111111'),
                'updated_at' => $faker->dateTimeThisMonth,
                'created_at' => $faker->dateTimeThisMonth,
            ]);
        }
    }
}
