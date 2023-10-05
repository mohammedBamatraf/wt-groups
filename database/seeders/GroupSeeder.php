<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Collection;
use App\Models\Group;
use App\Models\Language;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::select('id')->get();
        // $collections = Collection::select('id')->get();
        $users=User::select('id')->get();
        $languages = Language::select('id')->get();

        for ($i = 0; $i <= 100; $i++) {
            Group::factory()->create([
                'category_id' => $categories->random()->id,
                'user_id' => $users->random()->id,
                // 'collection_id' => $collections->random()->id,
                'language_id'   => $languages->random()->id,
            ]);
        }
    }
}
