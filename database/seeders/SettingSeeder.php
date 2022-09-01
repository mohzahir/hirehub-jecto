<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'phone1' => '092323232323',
            'email1' => 'info@hirehub-sd.com',
            'address1' => ' Sudan- Khartoum, 21 October street, Wad Eljabal Building, Floor no 1',
            'address1_ar' => ' Sudan- Khartoum, 21 October street, Wad Eljabal Building, Floor no 1',
            'phone2' => '092323232323',
            'email2' => 'info@hirehub-sd.com',
            'address2' => ' Sudan- Khartoum, 21 October street, Wad Eljabal Building, Floor no 1',
            'address2_ar' => ' Sudan- Khartoum, 21 October street, Wad Eljabal Building, Floor no 1',
            'phone3' => '092323232323',
            'email3' => 'info@hirehub-sd.com',
            'address3' => ' Sudan- Khartoum, 21 October street, Wad Eljabal Building, Floor no 1',
            'address3_ar' => ' Sudan- Khartoum, 21 October street, Wad Eljabal Building, Floor no 1',
            'opining_week_day' => 'sat',
            'opining_week_day' => 'thu',
            'opining_hour' => '08:00',
            'closing_hour' => '09:00',
            'feature1_title' => 'Excellence',
            'feature1_descr' => 'Lorem ipsum dolor sit amet conscu adipiscing elit sed do eusmod tempor incididunt ut into',
            'feature2_title' => 'Adaptability',
            'feature2_descr' => 'Lorem ipsum dolor sit amet conscu adipiscing elit sed do eusmod tempor incididunt ut into',
            'feature3_title' => 'Integrity',
            'feature3_descr' => 'Lorem ipsum dolor sit amet conscu adipiscing elit sed do eusmod tempor incididunt ut into',
            'feature4_title' => 'Knowledge',
            'feature4_descr' => 'Lorem ipsum dolor sit amet conscu adipiscing elit sed do eusmod tempor incididunt ut into',
            'feature5_title' => 'The Passion',
            'feature5_descr' => 'Lorem ipsum dolor sit amet conscu adipiscing elit sed do eusmod tempor incididunt ut into',
            'feature6_title' => 'Innovation',
            'feature6_descr' => 'Lorem ipsum dolor sit amet conscu adipiscing elit sed do eusmod tempor incididunt ut into',
            'feature1_title_ar' => 'التفوق',
            'feature1_descr_ar' => 'نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي',
            'feature2_title_ar' => 'القدرة على التكيف',
            'feature2_descr_ar' => 'نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي',
            'feature3_title_ar' => 'التكامل',
            'feature3_descr_ar' => 'نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي',
            'feature4_title_ar' => 'المعرفة',
            'feature4_descr_ar' => 'نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي',
            'feature5_title_ar' => 'الرغبة',
            'feature5_descr_ar' => 'نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي',
            'feature6_title_ar' => 'التعاون',
            'feature6_descr_ar' => 'نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي',
            'google_map_link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.804133842933!2d32.52344761480181!3d15.602110289171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x168e8f9fb498741f%3A0x1d6625c7e9fe7649!2z2LnZhdin2LHYqSDYp9mE2LDZh9io!5e0!3m2!1sen!2s!4v1624960495877!5m2!1sen!2s',
            'ceo_video_link' => 'http://hirehub-sd.com/frontend/videos/hirehub.mp4',
            'facebook_link' => 'www.facebook.com',
            'twitter_link' => 'www.twitter.com',
            'linkedin_link' => 'www.linkedin.com',
            'instagram_link' => 'www.instagram.com',
            'youtube_link' => 'www.youtube.com',
            'logo1' => 'https://www.hirehub-sd.com/photos/1/logo.png',
            'logo2' => 'https://www.hirehub-sd.com/photos/1/logo.png',
        ]);
    }
}
