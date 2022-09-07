<?php

namespace Database\Factories;

use App\Models\RunningWorkshop;
use App\Models\Workshop;
use Illuminate\Database\Eloquent\Factories\Factory;

class RunningWorkshopFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RunningWorkshop::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'workshop_id' => $this->faker->randomElement(Workshop::pluck('id')->toArray()),
            'price_sdg' => $this->faker->randomNumber(2),
            'price_dollar' => $this->faker->randomNumber(2),
            'start_date' => $this->faker->dateTime(),
            'finish_date' => $this->faker->dateTime(),
            'shown' => $this->faker->randomElement([0, 1]),
            'lecture_hours' => $this->faker->randomElement([2, 1, 3]),
            'total_hours' => $this->faker->randomElement([20, 30, 35, 40]),
            'location' => $this->faker->city(),
        ];
    }
}
