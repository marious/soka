<?php

namespace Modules\Players\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Players\Entities\Player;
use ProtoneMedia\Splade\Facades\Toast;

class PlayerExtraController
{
    public function index($id)
    {
        $player = Player::findOrFail($id);
        return view('players::players.extra', [
            'player' => $player,
        ]);
    }

    public function store(Request $request, $id)
    {
        $player = Player::findOrFail($id);
        $player->update([
            'payload' => $request->input('payload')
        ]);

        Toast::success(__('Extra data updated successfully'))->autoDismiss(4);
        return to_route('admin.players.index');
    }
}
