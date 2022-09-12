<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::insert([
            [
                'title' => 'Terms And Conditions',
                'title_ar' => 'السياسات والأحكام',
                'slug' => 'terms-and-conditions',
                'content' => 'fdfdfdf',
                'content_ar' => 'نص عربي نص عربي',
                'is_navbar_page' => '1',
                'is_footer_page' => '1',
            ],
        ]);
    }
}
