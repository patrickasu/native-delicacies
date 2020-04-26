<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_categories')->insert([
            'title' => 'Local Dishes',
            'description' => 'Our local dishes take your taste buds on an adventure when you sit down at our table. Our classic menu consists of cuisine that makes Native Delicacies Cafes famous. One bite into our mouthwatering Legendary Burger and you agree You can find tasty burgers',
            'price' => '1200',
            'image_url' => '/img/food.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'Starters',
            'description' => 'From our exquisite kitchen creations to handcrafted cocktails from our full-service bar, you wont be disappointed with the various menu options we offer here at Native Delicacies Restaurant Lagos. Our meals are produced under a very hygienic environment',
            'price' => '1800',
            'image_url' => '/img/8.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_categories')->insert([
            'title' => 'Grills',
            'description' => 'Freshly made Grilled food, excellent bar offerings and stellar service, all within the carefully designed space. Our sumptuous meals are produced under a very stringent hygienic environment with our  located with beautiful ambience for family and friends.',
            'price' => '2000',
            'image_url' => '/img/5.png',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
