<?php

namespace Modules\Players\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\PlayerService;
use Illuminate\Http\Request;
use Modules\Players\Entities\Player;
use Modules\Players\Transformers\PlayerResource;

class PlayersFrontController extends Controller
{

    public function __construct(protected PlayerService $playerService)
    {

    }
    public function index(Request $request)
    {
        $request->merge([
            'searchItems' => request()->except(['page', 'limit']),
        ]);

        return view('players::front.players.index');
    }

    public function api(Request $request)
    {
        $request->merge([
            'searchItems' => request()->except(['page', 'limit'])
        ]);

        $players = $this->playerService->getPlayers($request->toArray());

        return PlayerResource::collection($players);
    }

    public function show(Player $player)
    {
        return view('players::front.players.show', compact('player'));
    }
}
