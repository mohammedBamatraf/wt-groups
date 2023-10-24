<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Report;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $users = User::select('id')->get();
        $groups = Group::select('id')->get();
        for ($i = 0; $i <= 10; $i++) {
            Report::factory()->create([
                // 'user_id' => $users->random()->id,
                'group_id' => $groups->random()->id,
            ]);
        }
    }
}
