<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = [
        'name_en',
        'name_ar',
        'position_en',
        'position_ar',
        'bio_en',
        'bio_ar',
        'photo',
    ];
}
