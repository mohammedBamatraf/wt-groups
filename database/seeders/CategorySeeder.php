<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(5)->create();
        $news=Category::create(['name'=>'الاخبار']);
        $news->addMedia(storage_path('images/news.png'))->preservingOriginal()->toMediaCollection('category');
        $sports=Category::create(['name'=>'رياضة']);
        $sports->addMedia(storage_path('images/sports.png'))->preservingOriginal()->toMediaCollection('category');
    }
}
