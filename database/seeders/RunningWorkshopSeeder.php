<?php

namespace Database\Seeders;

use App\Models\RunningWorkshop;
use Illuminate\Database\Seeder;

class RunningWorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RunningWorkshop::insert([
            [
                'workshop_id' => '1',
                'price_sdg' => '2000',
                'price_dollar' => '100',
                'start_date' => '2022-10-1 01:00:00',
                'finish_date' => '2022-10-5 01:00:00',
                'lecture_hours' => '2',
                'total_hours' => '10',
                'location' => 'office',
                'shown' => 1,
            ],
            [
                'workshop_id' => '2',
                'price_sdg' => '5000',
                'price_dollar' => '150',
                'start_date' => '2022-10-1 01:00:00',
                'finish_date' => '2022-10-5 01:00:00',
                'lecture_hours' => '3',
                'total_hours' => '15',
                'location' => 'office',
                'shown' => 1,
            ],
            [
                'workshop_id' => '3',
                'price_sdg' => '500',
                'price_dollar' => '50',
                'start_date' => '2022-10-1 01:00:00',
                'finish_date' => '2022-10-5 01:00:00',
                'lecture_hours' => '3',
                'total_hours' => '15',
                'location' => 'office',
                'shown' => 1,
            ],
        ]);
    }
}
