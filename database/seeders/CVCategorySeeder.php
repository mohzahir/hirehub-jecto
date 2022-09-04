<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CVCategory;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CVCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        CVCategory::insert([
            [
                'title' => "featured",
                'title_ar' => "مميز",
                'slug' => 'featured',
                'cv_price_sdg' => '1000',
                'cv_price_dollar' => '200',
                'features' => $faker->sentences(3, true),
                'features_ar' => $faker->sentences(3, true),
                'status' => 'active',
            ],
        ]);
    }
}
