<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Caba Restaurant',
            'logo_image_url' => '/img/3.png',
            'address_1' => 'No. 25 Adewale Avenue,',
            'address_2' => '',
            'city' => 'Victoria Island',
            'state' => 'Lagos',
            'email' => 'contact@cabadelicacies.com',
            'phone_number' => '+2347056563248, +2348162234518',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
