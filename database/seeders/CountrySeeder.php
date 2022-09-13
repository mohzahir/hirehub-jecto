<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::insert([
            [
                'name' => 'Sudan',
                'name_ar' => 'السودان',
                'photo' => 'jecto/default/assets/img/home-one/location1.jpg',
            ],
            [
                'name' => 'Qatar',
                'name_ar' => 'قطر',
                'photo' => 'jecto/default/assets/img/home-one/location2.jpg',
            ],
            [
                'name' => 'Saudi Arabia',
                'name_ar' => 'المملكة العربية السعودية',
                'photo' => 'jecto/default/assets/img/home-one/location3.jpg',
            ],
            [
                'name' => 'United Arab Emarates',
                'name_ar' => 'الأمارات العربية المتحدة',
                'photo' => 'jecto/default/assets/img/home-one/location4.jpg',
            ],
        ]);
    }
}
