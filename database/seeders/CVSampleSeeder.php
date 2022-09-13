<?php

namespace Database\Seeders;

use App\Models\CVSample;
use Illuminate\Database\Seeder;

class CVSampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CVSample::insert([
            [
                'title' => 'title',
                'title_ar' => 'محمد زاهر',
                'cv_category_id' => '1',
                'photo' => 'jecto/default/assets/img/Cv.PNG',
                'pdf' => 'jecto/default/assets/img/Cv.PNG',
            ],
            [
                'title' => 'title',
                'title_ar' => 'محمد زاهر',
                'cv_category_id' => '1',
                'photo' => 'jecto/default/assets/img/Cv.PNG',
                'pdf' => 'jecto/default/assets/img/Cv.PNG',
            ],
            [
                'title' => 'title',
                'title_ar' => 'محمد زاهر',
                'cv_category_id' => '1',
                'photo' => 'jecto/default/assets/img/Cv.PNG',
                'pdf' => 'jecto/default/assets/img/Cv.PNG',
            ],
            [
                'title' => 'title',
                'title_ar' => 'محمد زاهر',
                'cv_category_id' => '2',
                'photo' => 'jecto/default/assets/img/Cv.PNG',
                'pdf' => 'jecto/default/assets/img/Cv.PNG',
            ],
            [
                'title' => 'title',
                'title_ar' => 'محمد زاهر',
                'cv_category_id' => '2',
                'photo' => 'jecto/default/assets/img/Cv.PNG',
                'pdf' => 'jecto/default/assets/img/Cv.PNG',
            ],
            [
                'title' => 'title',
                'title_ar' => 'محمد زاهر',
                'cv_category_id' => '3',
                'photo' => 'jecto/default/assets/img/Cv.PNG',
                'pdf' => 'jecto/default/assets/img/Cv.PNG',
            ],
            [
                'title' => 'title',
                'title_ar' => 'محمد زاهر',
                'cv_category_id' => '4',
                'photo' => 'jecto/default/assets/img/Cv.PNG',
                'pdf' => 'jecto/default/assets/img/Cv.PNG',
            ],
            [
                'title' => 'title',
                'title_ar' => 'محمد زاهر',
                'cv_category_id' => '4',
                'photo' => 'jecto/default/assets/img/Cv.PNG',
                'pdf' => 'jecto/default/assets/img/Cv.PNG',
            ],
        ]);
    }
}
