<?php

namespace App\Models;

use App\Traits\Localize;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use Localize;
    protected $fillable = ['name_en', 'name_ar', 'description_en', 'description_ar', 'photo'];

    // localized attributes

    public function getNameAttribute()
    {
        return $this->getLocalizedAttribute('name');
    }

    public function getDescriptionAttribute()
    {
        return $this->getLocalizedAttribute('description');
    }
}
