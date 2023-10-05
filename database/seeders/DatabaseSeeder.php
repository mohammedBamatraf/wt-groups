<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Collection;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CollectionSeeder::class,
            LanguageSeeder::class,
            CategorySeeder::class,
            GroupSeeder::class,
            ReportSeeder::class,
        ]);

        Artisan::call('passport:install');
        Artisan::call('ide-helper:generate');
        Artisan::call('ide-helper:models -n -q');
    }
}
