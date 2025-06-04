<?php

namespace App\Models;

use App\Traits\Localize;
use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    use Localize;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'team_members';
    protected $fillable = [
        'name_en',
        'name_ar',
        'position_en',
        'position_ar',
        'bio_en',
        'bio_ar',
        'photo',
    ];

    // localized attributes
    protected $appends = [
        'name',
        'position',
        'bio',
    ];

    public function getNameAttribute()
    {
        return $this->getLocalizedAttribute('name');
    }

    public function getPositionAttribute()
    {
        return $this->getLocalizedAttribute('position');
    }

    public function getBioAttribute()
    {
        return $this->getLocalizedAttribute('bio');
    }
}
