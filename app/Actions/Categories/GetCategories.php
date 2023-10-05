<?php
namespace App\Actions\Categories;

use App\Models\Category;

class GetCategories
{
    public function __invoke()
    {
        $categories = Category::select(['id','name'])->get();
        return $categories;
    }
}
