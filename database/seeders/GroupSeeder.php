<?php

namespace Database\Seeders;

use App\Enums\GroupsSocialEnum;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Group;
use App\Models\Language;
use App\Models\User;
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
        $users = User::select('id')->get();
        $languages = Language::select('id')->get();

        Group::factory()->create([
            'name' => 'قروب العائلة',
            'category_id' => $categories[0]->id,
            'social_type' => GroupsSocialEnum::Whatsapp,
            'user_id' => $users->random()->id,
            // 'collection_id' => $collections->random()->id,
            'language_id' => $languages[0]->id,
        ]);
        Group::factory()->create([
            'name' => 'قروب البرمجه',
            'category_id' => $categories[1]->id,
            'social_type' => GroupsSocialEnum::Whatsapp,
            'user_id' => $users->random()->id,
            // 'collection_id' => $collections->random()->id,
            'language_id' => $languages[1]->id,
        ]);

        Group::factory()->create([
            'name' => 'متجر الكتروني',
            'category_id' => $categories[0]->id,
            'social_type' => GroupsSocialEnum::Telegram,
            'user_id' => $users->random()->id,
            // 'collection_id' => $collections->random()->id,
            'language_id' => $languages[0]->id,
        ]);
        Group::factory()->create([
            'name' => 'قروب جامعة حضرموت',
            'category_id' => $categories[1]->id,
            'social_type' => GroupsSocialEnum::Telegram,
            'user_id' => $users->random()->id,
            // 'collection_id' => $collections->random()->id,
            'language_id' => $languages[1]->id,
        ]);

    }
}
