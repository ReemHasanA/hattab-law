<?php

namespace App\Traits;

trait Localize
{
    public function getLocalizedAttribute($attribute)
    {
        $locale = app()->getLocale() ?? 'en'; // Default to 'en' if locale is not set
        $localizedAttribute = "{$attribute}_{$locale}";
        return $this->$localizedAttribute;
    }
}
