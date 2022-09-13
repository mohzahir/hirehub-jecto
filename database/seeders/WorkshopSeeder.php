<?php

namespace Database\Seeders;

use App\Models\Workshop;
use Illuminate\Database\Seeder;

class WorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Workshop::insert([
            [
                'category_id' => '1',
                'title' => 'Employment Workshop',
                'title_ar' => 'ورشة التوظيف',
                'description' => 'Alias quis sunt occaecati reiciendis tenetur voluptas. Veritatis aliquid et non ut. Reprehenderit sed ullam sunt non inventore sint excepturi sed. Non accusamus nulla ea expedita. Blanditiis atque qui eos qui aut qui. Possimus sed aut veritatis dolor id vel qui non. Quo sit itaque eligendi ut eveniet. Inventore dolorum quo suscipit nobis tempora.',
                'description_ar' => 'نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي ',
                'slug' => 'sddkssssd',
                'img' => 'jecto/default/assets/img/home-three/feature3.png',
                'video' => 'sddksd',
                'trainer_name' => 'mohammed zahir',
                'trainer_name_ar' => 'محمد زاهر',
                'trainer_job_title' => 'Software Engineer',
                'trainer_job_title_ar' => 'مهندس برمجيات',
                'trainer_img' => 'jecto/default/assets/img/home-two/candidate3.jpg',
                'trainer_descr' => '<p>Alias quis sunt occaecati reiciendis tenetur voluptas. Veritatis aliquid et non ut. Reprehenderit sed ullam sunt non inventore sint excepturi sed. Non accusamus nulla ea expedita. Blanditiis atque qui eos qui aut qui. Possimus sed aut veritatis dolor id vel qui non. Quo sit itaque eligendi ut eveniet. Inventore dolorum quo suscipit nobis tempora.</p>',
                'trainer_descr_ar' => 'نص عربي نص عربي نص عربي نص عربي',
            ],
            [
                'category_id' => '2',
                'title' => 'How to secure a job',
                'title_ar' => 'كيف تبحث عن وظيفة',
                'description' => 'Alias quis sunt occaecati reiciendis tenetur voluptas. Veritatis aliquid et non ut. Reprehenderit sed ullam sunt non inventore sint excepturi sed. Non accusamus nulla ea expedita. Blanditiis atque qui eos qui aut qui. Possimus sed aut veritatis dolor id vel qui non. Quo sit itaque eligendi ut eveniet. Inventore dolorum quo suscipit nobis tempora.',
                'description_ar' => 'نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي ',
                'slug' => 'sddasasksd',
                'img' => 'jecto/default/assets/img/home-three/feature2.png',
                'video' => 'sddksd',
                'trainer_name' => 'mohammed zahir',
                'trainer_name_ar' => 'محمد زاهر',
                'trainer_job_title' => 'Software Engineer',
                'trainer_job_title_ar' => 'مهندس برمجيات',
                'trainer_img' => 'jecto/default/assets/img/home-two/candidate3.jpg',
                'trainer_descr' => '<p>Alias quis sunt occaecati reiciendis tenetur voluptas. Veritatis aliquid et non ut. Reprehenderit sed ullam sunt non inventore sint excepturi sed. Non accusamus nulla ea expedita. Blanditiis atque qui eos qui aut qui. Possimus sed aut veritatis dolor id vel qui non. Quo sit itaque eligendi ut eveniet. Inventore dolorum quo suscipit nobis tempora.</p>',
                'trainer_descr_ar' => 'نص عربي نص عربي نص عربي نص عربي',
            ],
            [
                'category_id' => '2',
                'title' => 'hunting a job',
                'title_ar' => 'إصطياد الوظائف',
                'description' => 'Alias quis sunt occaecati reiciendis tenetur voluptas. Veritatis aliquid et non ut. Reprehenderit sed ullam sunt non inventore sint excepturi sed. Non accusamus nulla ea expedita. Blanditiis atque qui eos qui aut qui. Possimus sed aut veritatis dolor id vel qui non. Quo sit itaque eligendi ut eveniet. Inventore dolorum quo suscipit nobis tempora.',
                'description_ar' => 'نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي نص عربي ',
                'slug' => 'sddksdsdd',
                'img' => 'jecto/default/assets/img/home-three/feature2.png',
                'video' => 'sddksd',
                'trainer_name' => 'mohammed zahir',
                'trainer_name_ar' => 'محمد زاهر',
                'trainer_job_title' => 'Software Engineer',
                'trainer_job_title_ar' => 'مهندس برمجيات',
                'trainer_img' => 'jecto/default/assets/img/home-two/candidate3.jpg',
                'trainer_descr' => '<p>Alias quis sunt occaecati reiciendis tenetur voluptas. Veritatis aliquid et non ut. Reprehenderit sed ullam sunt non inventore sint excepturi sed. Non accusamus nulla ea expedita. Blanditiis atque qui eos qui aut qui. Possimus sed aut veritatis dolor id vel qui non. Quo sit itaque eligendi ut eveniet. Inventore dolorum quo suscipit nobis tempora.</p>',
                'trainer_descr_ar' => 'نص عربي نص عربي نص عربي نص عربي',
            ],
        ]);
    }
}
