<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    protected $fillable = ['name_en', 'name_ar', 'description_en', 'description_ar', 'photo'];

    // Accessor for Translated Name
    public function getTranslatedNameAttribute()
    {
        $locale = app()->getLocale();
        logger('Accessor Locale: '.$locale); // Debug: Check Locale in Accessor

        return $locale === 'ar' ? $this->name_ar : $this->name_en;
    }

    public function getTranslatedDescriptionAttribute()
    {
        $locale = app()->getLocale();
        logger('Accessor Locale: '.$locale); // Debug: Check Locale in Accessor

        return $locale === 'ar' ? $this->description_ar : $this->description_en;
    }
}
