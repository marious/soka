<?php

namespace Modules\Players\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Modules\Players\Entities\Player;
use Modules\Players\Transformers\PlayerResource;

class PlayersFrontController extends Controller
{
    public function index()
    {
        return view('players::front.players.index');
    }

    public function api()
    {
        return PlayerResource::collection(Player::with('team')->paginate(20));
    }

    public function show(Player $player)
    {
        return view('players::front.players.show', compact('player'));
    }
}
