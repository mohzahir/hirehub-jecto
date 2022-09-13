<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::insert([
            [
                'country_id' => '1',
                'name' => 'Khartoum',
                'name_ar' => 'الخرطوم',
            ],
            [
                'country_id' => '2',
                'name' => 'Doha',
                'name_ar' => 'الدوحة',
            ],
            [
                'country_id' => '3',
                'name' => 'Makkah',
                'name_ar' => 'مكة',
            ],
            [
                'country_id' => '4',
                'name' => 'Dubai',
                'name_ar' => 'دبي',
            ],
        ]);
    }
}
