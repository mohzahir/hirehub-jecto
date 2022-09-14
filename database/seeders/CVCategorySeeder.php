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
                'slug' => 'Normal',
                'cv_price_sdg' => '1000',
                'cv_price_dollar' => '200',
                'features' => "
                <ul>
                    <li>Unlimited Job Categories</li>
                    <li>Unlimited Job Posting</li>
                    <li>Unlimited proposals</li>
                    <li>Resume database access</li>
                    <li>Individually written job ads</li>
                </ul>
                ",
                'features_ar' => "
                <ul>
                    <li>Unlimited Job Categories</li>
                    <li>Unlimited Job Posting</li>
                    <li>Unlimited proposals</li>
                    <li>Resume database access</li>
                    <li>Individually written job ads</li>
                </ul>
                ",
                'status' => 'active',
            ],
            [
                'title' => "Golden",
                'title_ar' => "زهبي",
                'slug' => 'Golden',
                'cv_price_sdg' => '2000',
                'cv_price_dollar' => '400',
                'features' => "
                <ul>
                    <li>Unlimited Job Categories</li>
                    <li>Unlimited Job Posting</li>
                    <li>Unlimited proposals</li>
                    <li>Resume database access</li>
                    <li>Individually written job ads</li>
                </ul>
                ",
                'features_ar' => "
                <ul>
                    <li>Unlimited Job Categories</li>
                    <li>Unlimited Job Posting</li>
                    <li>Unlimited proposals</li>
                    <li>Resume database access</li>
                    <li>Individually written job ads</li>
                </ul>
                ",
                'status' => 'active',
            ],
            [
                'title' => "Premium",
                'title_ar' => "بريميوم",
                'slug' => 'Premium',
                'cv_price_sdg' => '3000',
                'cv_price_dollar' => '600',
                'features' => "
                <ul>
                    <li>Unlimited Job Categories</li>
                    <li>Unlimited Job Posting</li>
                    <li>Unlimited proposals</li>
                    <li>Resume database access</li>
                    <li>Individually written job ads</li>
                </ul>
                ",
                'features_ar' => "
                <ul>
                    <li>Unlimited Job Categories</li>
                    <li>Unlimited Job Posting</li>
                    <li>Unlimited proposals</li>
                    <li>Resume database access</li>
                    <li>Individually written job ads</li>
                </ul>
                ",
                'status' => 'active',
            ],
            [
                'title' => "Silver",
                'title_ar' => "فضي",
                'slug' => 'Silver',
                'cv_price_sdg' => '4000',
                'cv_price_dollar' => '800',
                'features' => "
                <ul>
                    <li>Unlimited Job Categories</li>
                    <li>Unlimited Job Posting</li>
                    <li>Unlimited proposals</li>
                    <li>Resume database access</li>
                    <li>Individually written job ads</li>
                </ul>
                ",
                'features_ar' => "
                <ul>
                    <li>Unlimited Job Categories</li>
                    <li>Unlimited Job Posting</li>
                    <li>Unlimited proposals</li>
                    <li>Resume database access</li>
                    <li>Individually written job ads</li>
                </ul>
                ",
                'status' => 'active',
            ],
        ]);
    }
}
