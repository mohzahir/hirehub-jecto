<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        Job::insert([
            [
                'category_id' => '1',
                'title' => 'Software Engineer',
                'title_ar' => 'مهندس برمجيات',
                'slug' => "software-engineer",
                'description' => $faker->sentences(3, true),
                'description_ar' => $faker->sentences(3, true),
                'status' => 'active',
                'photo' => 'jecto/default/assets/img/home-three/feature1.png',
                'is_featured' => '1',
            ],
            [
                'category_id' => '2',
                'title' => 'General Doctor',
                'title_ar' => 'طبيب عمومي',
                'slug' => "general-doctor",
                'description' => $faker->sentences(3, true),
                'description_ar' => $faker->sentences(3, true),
                'status' => 'active',
                'photo' => 'jecto/default/assets/img/home-three/feature2.png',
                'is_featured' => '1',
            ],
            [
                'category_id' => '1',
                'title' => 'Special Driver',
                'title_ar' => 'سائق خاص',
                'slug' => "special-driver",
                'description' => $faker->sentences(3, true),
                'description_ar' => $faker->sentences(3, true),
                'status' => 'active',
                'photo' => 'jecto/default/assets/img/home-three/feature3.png',
                'is_featured' => '1',
            ],
            [
                'category_id' => '2',
                'title' => 'Security Guard',
                'title_ar' => 'حارس أمن وسلامة',
                'slug' => "security-guard",
                'description' => $faker->sentences(3, true),
                'description_ar' => $faker->sentences(3, true),
                'status' => 'active',
                'photo' => 'jecto/default/assets/img/home-three/feature4.png',
                'is_featured' => '1',
            ],
        ]);
    }
}
