<?php
namespace App\Actions\Categories;

use App\Models\Category;

class GetCategories
{
    public function __invoke()
    {
        $categories = Category::select(['id','name'])->with('media')->get();
        return $categories;
    }
}
