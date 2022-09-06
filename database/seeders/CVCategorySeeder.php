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
                'title' => "Normal",
                'title_ar' => "عادي",
                'slug' => 'featured',
                'cv_price_sdg' => '1000',
                'cv_price_dollar' => '200',
                'features' => $faker->sentences(3, true),
                'features_ar' => $faker->sentences(3, true),
                'status' => 'active',
            ],
            [
                'title' => "Golden",
                'title_ar' => "زهبي",
                'slug' => 'featured',
                'cv_price_sdg' => '1000',
                'cv_price_dollar' => '200',
                'features' => $faker->sentences(3, true),
                'features_ar' => $faker->sentences(3, true),
                'status' => 'active',
            ],
            [
                'title' => "Premium",
                'title_ar' => "بريميوم",
                'slug' => 'featured',
                'cv_price_sdg' => '1000',
                'cv_price_dollar' => '200',
                'features' => $faker->sentences(3, true),
                'features_ar' => $faker->sentences(3, true),
                'status' => 'active',
            ],
            [
                'title' => "Silver",
                'title_ar' => "فضي",
                'slug' => 'featured',
                'cv_price_sdg' => '1000',
                'cv_price_dollar' => '200',
                'features' => $faker->sentences(3, true),
                'features_ar' => $faker->sentences(3, true),
                'status' => 'active',
            ],
            [
                'title' => "Bronze",
                'title_ar' => "برونزي",
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
