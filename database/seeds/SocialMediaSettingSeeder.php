<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SocialMediaSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_media_settings')->insert([
            'facebook_url' => 'facebook.com',
            'twitter_url' => 'twitter.com',
            'instagram_url' => 'instagram.com',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
