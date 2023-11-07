<?php
namespace App\Actions\Languages;

use App\Models\Language;

class GetLanguages
{
    public function __invoke()
    {
        $languages = Language::with('media')->get();
        return $languages;
    }
}
