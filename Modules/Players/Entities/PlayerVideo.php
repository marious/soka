<?php

namespace Modules\Players\Entities;

use Illuminate\Database\Eloquent\Model;

class PlayerVideo extends Model
{
    protected $fillable = ['player_id', 'video_code'];
}
