<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('food_items')->insert([
            'title' => 'Isi Ewu',
            'ingredients' => 'Goat Head,  Pieces Tossed In A Spicy.',
            'price' => '2000',
            'category_id' => '1',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Nkwobi',
            'ingredients' => 'Jumbo Prawns, Fried In Breadcrumbs',
            'price' => '2500',
            'category_id' => '1',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Goat Curry',
            'ingredients' => 'Goat Pieces, Cooked In A Rich Curry.',
            'price' => '1800',
            'category_id' => '1',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Fried Rice',
            'ingredients' => 'Fried Rice Cooked With Chicken, Shrimps.',
            'price' => '3000',
            'category_id' => '1',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Chicken Strips',
            'ingredients' => 'Chicken Cooked In A Rich Peanut Sauce.',
            'price' => '2500',
            'category_id' => '2',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Crispy Wings',
            'ingredients' => 'A spicy traditional Dish Made With crispy.',
            'price' => '1700',
            'category_id' => '2',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Tempura Prawns',
            'ingredients' => 'Meaty Oxtail, Onions, Green Peppers, Tomatoe.',
            'price' => '2000',
            'category_id' => '2',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Shrimp Spring',
            'ingredients' => 'A Flavourful shrimp Of spring In accompanied.',
            'price' => '2800',
            'category_id' => '2',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Grilled Shrimps',
            'ingredients' => 'Iceberg lettuce, crouton, Parmesan cheese.',
            'price' => '3000',
            'category_id' => '3',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Fattoush Salad',
            'ingredients' => 'Lettuce, tomatoes, cucumber, bell pepper, radish.',
            'price' => '2300',
            'category_id' => '3',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Tabouli Grilled',
            'ingredients' => 'A Mediterranean salad prepared with chopped veggies.',
            'price' => '3000',
            'category_id' => '3',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Thai Mango Grilled',
            'ingredients' => 'A bright and fresh mango grill with a zesty.',
            'price' => '2500',
            'category_id' => '3',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
