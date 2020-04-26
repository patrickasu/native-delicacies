<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => "Caba Delicacies is a Nigeria multinational chain of local and foreign food restaurants. Headquartered in the unincorporated area of Lagos the company was founded in 2005 as Insta-Native Delicacies, an Abuja, Lagos baed restaurant chain.",
            'keywords' => 'Native restaurant, foreign food, local food, best delicacies, fast food',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
