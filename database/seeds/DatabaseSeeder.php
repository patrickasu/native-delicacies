<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(FoodCategorySeeder::class);
        $this->call(FoodItemSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(ReservationSeeder::class);
        $this->call(GeneralSettingSeeder::class);
        $this->call(SeoSettingSeeder::class);
        $this->call(SocialMediaSettingSeeder::class);
    }
}
