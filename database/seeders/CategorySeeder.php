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
                'status' => $faker->randomElement(['active', 'active']),
                'photo' =>  'dfdsdfdfs',
            ],
            [
                'title' => "Medicine",
                'title_ar' => "الطب",
                'slug' => 'medicine',
                'summary' => $faker->sentences(3, true),
                'summary_ar' => $faker->sentences(3, true),
                'status' => $faker->randomElement(['active', 'active']),
                'photo' => 'dfdsdfdfs',
            ],
        ]);
    }
}
