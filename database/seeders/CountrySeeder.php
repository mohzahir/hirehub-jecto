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
            ],
            [
                'name' => 'Qatar',
                'name_ar' => 'قطر',
            ],
        ]);
    }
}
