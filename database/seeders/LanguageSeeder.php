<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $arabic=Language::create(['name'=>'العربية']);
        // $arabic->addMedia(storage_path('images/yemen.png'))->preservingOriginal()->toMediaCollection('country flag');
        // $english=Language::create(['name'=>'English']);
        // $english->addMedia(storage_path('images/america.png'))->preservingOriginal()->toMediaCollection('country flag');
        $languages = [
            ['العربية', 'ar'],
            ['Español', 'es'],
            ['हिन्दी', 'hi'],
            ['中文', 'zh'],
            ['English', 'en'],
            ['Français', 'fr'],
            ['Deutsch', 'de'],
            ['Bahasa Indonesia', 'id'],
            ['日本語', 'ja'],
            ['Italiano', 'it'],
            ['Nederlands', 'nl'],
            ['বাংলা', 'bn'],
            ['Русский', 'ru'],
            ['Português', 'pt'],
        ];

        for ($i = 0; $i < count($languages); $i++) {
            $language = Language::create(['name' => $languages[$i][0]]);
            $language->addMedia(storage_path('images/languages/'.$languages[$i][1].'.png'))->preservingOriginal()->toMediaCollection('country flag');
        }
    }
}
