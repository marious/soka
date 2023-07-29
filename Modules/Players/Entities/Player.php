<?php

namespace Modules\Players\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Modules\Teams\Entities\Team;

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
class Player extends Model
{
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
}
