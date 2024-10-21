<?php

namespace Database\Seeders;

use App\Models\Collection;
use App\Models\User;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::select('id')->get();
        for ($i = 0; $i <= 10; $i++) {
            Collection::factory()->create(['user_id' => $users->random()->id]);
        }
    }
}
