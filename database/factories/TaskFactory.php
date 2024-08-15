<?php
declare(strict_types=1);
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => "Random Task Brat " . $this->faker->randomNumber(2),
        ];
    }
}
