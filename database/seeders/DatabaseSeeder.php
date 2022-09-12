<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        \App\Models\Candidate::factory(1)->create();
        $this->call(CategorySeeder::class);
        $this->call(CVCategorySeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(CitySeeder::class);
        $this->call(JobSeeder::class);
        $this->call(JobPostSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(BlogCommentSeeder::class);
        $this->call(CVSampleSeeder::class);
        \App\Models\Workshop::factory(3)->create();
        \App\Models\RunningWorkshop::factory(10)->create();
        $this->call(PageSeeder::class);
    }
}
