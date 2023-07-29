<?php

namespace Modules\Players\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Modules\Players\Entities\Player;

class PlayerVideoController extends Controller
{
    public function __invoke(Player $player)
    {
        return view('players::front.players.videos', [
            'videos' => $player->playerVideos->map->only(['video_code'])->flatten()->toArray(),
        ]);
    }
}
