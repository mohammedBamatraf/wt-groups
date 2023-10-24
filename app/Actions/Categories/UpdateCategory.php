<?php
namespace App\Actions\Categories;

use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class UpdateCategory
{
    public function __invoke(UpdateCategoryRequest $request,Category $category)
    {
        $data = $request -> validated();
        $category -> update($data);
        return $category;
    }
}
