<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $arabic=Language::create(['name'=>'العربية']);
        $arabic->addMedia(storage_path('images/yemen.png'))->preservingOriginal()->toMediaCollection('country flag');
        $english=Language::create(['name'=>'English']);
        $english->addMedia(storage_path('images/america.png'))->preservingOriginal()->toMediaCollection('country flag');
    }
}
