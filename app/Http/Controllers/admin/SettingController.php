<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GeneralSetting;
use App\SeoSetting;
use App\SocialMediaSetting;

class SettingController extends Controller
{
    public function general(){
        $id = 1;
        $general_setting = GeneralSetting::find($id);
        return view('admin/settings/general', [
            'general_setting' => $general_setting,
        ]);
    }
    public function saveGeneral(){
        $id = 1;
        $general_setting =  GeneralSetting::find($id);
        $general_setting->site_title = request('site_title');
        $general_setting->logo_image_url = request('logo_image_url');
        $general_setting->address_1 = request('address_1'); 
        $general_setting->address_2 = request('address_2'); 
        $general_setting->city = request('city'); 
        $general_setting->state = request('state'); 
        $general_setting->email = request('email'); 
        $general_setting->phone_number = request('phone_number'); 
        $general_setting->save();
        return redirect('admin/settings/general');
        //return request();
    }
    public function seo(){
        $id = 1;
        $seo_setting = SeoSetting::find($id);
        return view('admin/settings/seo', [
            'seo_setting' => $seo_setting,
        ]);
    }
    public function saveSeo(){
        $id = 1;
        $seo_setting =  SeoSetting::find($id);
        $seo_setting->description = request('description');
        $seo_setting->keywords = request('keywords');
        $seo_setting->save();
        return redirect('admin/settings/seo');
        //return request();
    }
    public function socialMedia(){
        $id = 1;
        $social_media_setting = SocialMediaSetting::find($id);
        return view('admin/settings/social-media', [
            'social_media_setting' => $social_media_setting,
        ]);
    }
    public function saveSocialMedia(){
        $id = 1;
        $social_media_setting =  SocialMediaSetting::find($id);
        $social_media_setting->facebook_url = request('facebook_url');
        $social_media_setting->twitter_url = request('twitter_url');
        $social_media_setting->instagram_url = request('instagram_url');
        $social_media_setting->save();
        return redirect('admin/settings/social-media');
        //return request();

    }
}
