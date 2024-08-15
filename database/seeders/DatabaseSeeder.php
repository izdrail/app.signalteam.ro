<?php

namespace Database\Seeders;

use App\Filament\Resources\Shop\OrderResource;
use App\Models\Address;
use App\Models\Blog\Author;
use App\Models\Blog\Category as BlogCategory;
use App\Models\Blog\Link;
use App\Models\Blog\Post;
use App\Models\Comment;
use App\Models\Project;
use App\Models\ProjectFile;
use App\Models\Shop\Brand;
use App\Models\Shop\Category as ShopCategory;
use App\Models\Shop\Customer;
use App\Models\Shop\Order;
use App\Models\Shop\OrderItem;
use App\Models\Shop\Payment;
use App\Models\Shop\Product;
use App\Models\Task;
use App\Models\User;
use Closure;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Helper\ProgressBar;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::raw('SET time_zone=\'+00:00\'');

        // Clear images
        Storage::deleteDirectory('public');

        // Admin
        $this->command->warn(PHP_EOL . 'Creating admin user...');
        $this->command->info('Admin user created.');
        User::factory(1)->create([
            'name' => 'Stefan',
            'email' => 'admin@todayintel.com',
            'password' => Hash::make('password'),
        ]);


        $this->command->info('Testing user created.');
        User::factory(1)->create([
            'name' => 'Test User',
            'email' => 'user@todayintel.com',
            'password' => Hash::make('password'),
        ]);


        $this->command->info('Create projects');

        Project::factory(5)->create()->each(function ($project) {
            // Create tasks for each project
            $project->tasks()->saveMany(Task::factory(3)->make());

            // Create a file for each project
            $project->files()->save(ProjectFile::factory()->make());
        });

    }
}
