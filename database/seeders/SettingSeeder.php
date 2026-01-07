<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // General
            ['key' => 'site_logo', 'value' => 'assets/images/logo.png', 'type' => 'image'],
            ['key' => 'site_favicon', 'value' => 'assets/images/favicon.png', 'type' => 'image'],
            ['key' => 'contact_email', 'value' => 'info@xpovio.com', 'type' => 'text'],
            ['key' => 'contact_phone', 'value' => '+99 2158 003 6980', 'type' => 'text'],
            ['key' => 'contact_address', 'value' => 'London, UK', 'type' => 'text'],
            
            // Social Links
            ['key' => 'social_facebook', 'value' => 'https://www.facebook.com/', 'type' => 'text'],
            ['key' => 'social_instagram', 'value' => 'https://www.instagram.com/', 'type' => 'text'],
            ['key' => 'social_linkedin', 'value' => 'https://www.linkedin.com/', 'type' => 'text'],
            ['key' => 'social_youtube', 'value' => 'https://www.youtube.com/', 'type' => 'text'],
            
            // Home Page Banner
            ['key' => 'home_banner_thumb', 'value' => 'assets/images/banner/banner-one-thumb.png', 'type' => 'image'],
            ['key' => 'home_banner_video_link', 'value' => 'https://www.youtube.com/watch?v=RvreULjnzFo', 'type' => 'text'],

            // Agency Section
            ['key' => 'home_agency_thumb_one', 'value' => 'assets/images/agency/thumb-one.png', 'type' => 'image'],
            ['key' => 'home_agency_thumb_two', 'value' => 'assets/images/agency/thumb-two.png', 'type' => 'image'],
            ['key' => 'home_agency_title', 'value' => 'We are digital creative agency in London', 'type' => 'text'],
            ['key' => 'home_agency_content', 'value' => 'Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation on the runway heading towards a streamlined cloud solution going forward porttitor dictum sapien.', 'type' => 'textarea'],
            
            // Offer Section
             ['key' => 'home_offer_title', 'value' => 'Giving Your Business Some Great Ideas', 'type' => 'text'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
