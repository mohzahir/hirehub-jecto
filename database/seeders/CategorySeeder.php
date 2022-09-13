<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        Category::insert([
            [
                'title' => "Engineering",
                'title_ar' => "الهندسة",
                'slug' => 'engineering',
                'summary' => $faker->sentences(3, true),
                'summary_ar' => $faker->sentences(3, true),
                'status' => 'active',
                'photo' =>  'jecto/default/assets/img/home-three/feature1.png',
                'type' =>  'job',
            ],
            [
                'title' => "Management",
                'title_ar' => "الادارة",
                'slug' => 'management',
                'summary' => $faker->sentences(3, true),
                'summary_ar' => $faker->sentences(3, true),
                'status' => 'active',
                'photo' =>  'jecto/default/assets/img/home-three/feature2.png',
                'type' =>  'job',
            ],
            [
                'title' => "Economic",
                'title_ar' => "الاقتصاد",
                'slug' => 'economic',
                'summary' => $faker->sentences(3, true),
                'summary_ar' => $faker->sentences(3, true),
                'status' => 'active',
                'photo' =>  'jecto/default/assets/img/home-three/feature3.png',
                'type' =>  'job',
            ],
            [
                'title' => "Information Technology",
                'title_ar' => "تقنية المعلومات",
                'slug' => 'information-technology',
                'summary' => $faker->sentences(3, true),
                'summary_ar' => $faker->sentences(3, true),
                'status' => 'active',
                'photo' =>  'jecto/default/assets/img/home-three/feature4.png',
                'type' =>  'job',
            ],
            [
                'title' => "Education",
                'title_ar' => "التعليم",
                'slug' => 'education',
                'summary' => $faker->sentences(3, true),
                'summary_ar' => $faker->sentences(3, true),
                'status' => 'active',
                'photo' =>  'jecto/default/assets/img/home-three/feature5.png',
                'type' =>  'job',
            ],
            [
                'title' => "Medicine",
                'title_ar' => "الطب",
                'slug' => 'medicine',
                'summary' => $faker->sentences(3, true),
                'summary_ar' => $faker->sentences(3, true),
                'status' => 'active',
                'photo' => 'jecto/default/assets/img/home-three/feature6.png',
                'type' =>  'job',
            ],
            [
                'title' => "Employment",
                'title_ar' => "التوظيف",
                'slug' => 'employment',
                'summary' => $faker->sentences(3, true),
                'summary_ar' => $faker->sentences(3, true),
                'status' => 'active',
                'photo' => 'jecto/default/assets/img/home-three/feature2.png',
                'type' =>  'blog',
            ],
            [
                'title' => "HR",
                'title_ar' => "الموارد البشرية",
                'slug' => 'hr',
                'summary' => $faker->sentences(3, true),
                'summary_ar' => $faker->sentences(3, true),
                'status' => 'active',
                'photo' => 'jecto/default/assets/img/home-three/feature2.png',
                'type' =>  'blog',
            ],
            [
                'title' => "Electronic",
                'title_ar' => "الالكترونيات",
                'slug' => 'electronic',
                'summary' => $faker->sentences(3, true),
                'summary_ar' => $faker->sentences(3, true),
                'status' => 'active',
                'photo' => 'jecto/default/assets/img/home-three/feature2.png',
                'type' =>  'workshop',
            ],
        ]);
    }
}
