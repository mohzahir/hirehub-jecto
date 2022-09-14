<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::insert([
            [
                'name' => 'company1',
                'name_ar' => 'شركة1',
                'logo' => 'jecto/default/assets/img/home-two/support1.png',
            ],
            [
                'name' => 'company2',
                'name_ar' => 'شركة2',
                'logo' => 'jecto/default/assets/img/home-two/support2.png',
            ],
            [
                'name' => 'company3',
                'name_ar' => 'شركة3',
                'logo' => 'jecto/default/assets/img/home-two/support3.png',
            ],
            [
                'name' => 'company4',
                'name_ar' => 'شركة4',
                'logo' => 'jecto/default/assets/img/home-two/support4.png',
            ],
            [
                'name' => 'company5',
                'name_ar' => 'شركة5',
                'logo' => 'jecto/default/assets/img/home-two/support5.png',
            ],
            [
                'name' => 'company6',
                'name_ar' => 'شركة6',
                'logo' => 'jecto/default/assets/img/home-two/support6.png',
            ],
        ]);
    }
}
