<?php

namespace Database\Seeders;

use App\Models\JobPost;
use Illuminate\Database\Seeder;

class JobPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobPost::insert([
            [
                'job_id' => '1',
                'city_id' => '1',
                'country_id' => '1',
                'category_id' => '1',
                'title' => 'Software Engineer Job Post',
                'title_ar' => 'اعلان وظيفة مهندس برمجيات',
                'slug' => 'software-engineer-job-post',
                'short_descr' => 'We are Looking for a skilled Ul/UX designer amet conscu adiing elitsed do eusmod tempor',
                'short_descr_ar' => ' نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي',
                'descr' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                'descr_ar' => 'نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي',
                'salary_from' => '2000',
                'salary_to' => '3000',
                'experience' => '2',
                'is_featured' => '1',
                'status' => 'active',
            ],
            [
                'job_id' => '2',
                'city_id' => '2',
                'country_id' => '2',
                'category_id' => '2',
                'title' => 'General Doctor',
                'title_ar' => 'مطلوب طبيب عمومي',
                'slug' => 'general-doctor-job-post',
                'short_descr' => 'We are Looking for a skilled Ul/UX designer amet conscu adiing elitsed do eusmod tempor',
                'short_descr_ar' => ' نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي',
                'descr' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.',
                'descr_ar' => 'نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي',
                'salary_from' => '4000',
                'salary_to' => '5000',
                'experience' => '1',
                'is_featured' => '1',
                'status' => 'active',
            ],
        ]);
    }
}
