<?php
declare(strict_types=1);
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFileFactory extends Factory
{
    public function definition(): array
    {
        return [
            'path' => '/home/user/project/file.txt',
        ];
    }
}
