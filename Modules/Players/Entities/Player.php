<?php

namespace Modules\Players\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\Teams\Entities\Team;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @property integer $id
 * @property integer $team_id
 * @property string $name
 * @property string $dob
 * @property string $position
 * @property float $height
 * @property integer $matches
 * @property float $soka_score
 * @property float $attacking
 * @property float $defensive
 * @property float $passing
 * @property float $possession
 * @property string $created_at
 * @property string $updated_at
 * @property Team $team
 */
class Player extends Model implements HasMedia
{
    use InteractsWithMedia;
    /**
     * @var array
     */
    protected $fillable = ['team_id', 'name', 'dob', 'position', 'height', 'matches', 'soka_score', 'attacking', 'defensive', 'passing', 'possession', 'created_at', 'updated_at'];


    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function playerVideos()
    {
        return $this->hasMany(PlayerVideo::class);
    }

    public function getAgeAttribute()
    {
        return Carbon::parse($this->dob)->age;
    }

    public function getImageAttribute()
    {
        return $this->getFirstMedia('image') ? $this->getFirstMedia('image')->getUrl() :
            'https://randomuser.me/api/portraits/men/'.random_int(5, 50).'.jpg';
    }
}
