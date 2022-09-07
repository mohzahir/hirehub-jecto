<?php

namespace Database\Factories;

use App\Models\Workshop;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkshopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Workshop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => 2,
            'title' => $this->faker->jobTitle(),
            'title_ar' => $this->faker->jobTitle(),
            'description' => $this->faker->sentences(8, true),
            'description_ar' => $this->faker->sentences(8, true),
            'slug' => $this->faker->unique()->slug,
            'img' => $this->faker->imageUrl(100, 100),
            'video' => 'http://youtube.com',
            'trainer_name' => $this->faker->name(),
            'trainer_name_ar' => $this->faker->name(),
            'trainer_job_title' => $this->faker->jobTitle(),
            'trainer_job_title_ar' => $this->faker->jobTitle(),
            'trainer_img' => $this->faker->imageUrl(100, 100),
            'trainer_descr' => $this->faker->sentences(8, true),
            'trainer_descr_ar' => $this->faker->sentences(8, true),
            // 'outcome' =>'<ul>
            //     <li> lorem ipsom ni reoir slkas lska alasca </li>
            //     <li> Eirmod tempor invidunt ut labore</li>
            //     <li> Consetetur sadipscing elitr, sed diam nonumy</li>
            //     <li> Dolore magna aliquyam erat</li>
            //     <li> Sed diam voluptua. At vero eos accusam</li>
            // </ul>',

        ];
    }
}
