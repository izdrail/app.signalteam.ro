<?php
declare(strict_types=1);
namespace Database\Factories;

use App\Enums\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => "Project Client " . $this->faker->randomNumber(2),
            'status' => 'new',
            'description' => $this->faker->text(200),
        ];
    }
}
