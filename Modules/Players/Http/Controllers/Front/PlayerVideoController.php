<?php

namespace Modules\Players\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class PlayerVideoController extends Controller
{
    public function __invoke()
    {
        return view('players::front.players.videos');
    }
}
