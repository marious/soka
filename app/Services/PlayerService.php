<?php

namespace App\Services;

use Modules\Players\Entities\Player;

class PlayerService
{
    public function getPlayers($search = [])
    {
        $positions = [];
        if (isset($search['searchItems'])) {
            foreach ($search['searchItems'] as $key => $value) {
                if ($key === 'g' && $value === 'true') {
                    $positions[] = 'Goalkeeper';
                }
                if ($key === 'd' && $value === 'true') {
                    $positions[] = 'Defender';
                }

                if ($key === 'm' && $value === 'true') {
                    $positions[] = 'Midfielder';
                }

                if ($key === 'f' && $value === 'true') {
                    $positions[] = 'Forward';
                }
            }
        }
    $searchItems = collect($search['searchItems'])->except(['g', 'd', 'm', 'f', 'sort_type', 'sort_by'])->toArray();

        $players = Player::with('team')
            ->where(count($searchItems) ? $searchItems : [])
            ->when(count($positions), function ($query) use ($positions) {
                $query->whereIn('position', $positions);
            })
            ->when(isset($search['searchItems']) && isset($search['searchItems']['sort_by']), function ($query) use
    ($search) {
                $query->orderBy($search['searchItems']['sort_by'], $search['searchItems']['sort_type']);
            })
            ->paginate(20);
        return $players;
    }
}
