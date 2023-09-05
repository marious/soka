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
        $query = Player::with(['team', 'media'])
            ->when(count($positions), function ($query) use ($positions) {
                $query->whereIn('position', $positions);
            })
            ->when(isset($search['searchItems']) && isset($search['searchItems']['sort_by']), function ($query) use ($search) {
                $sortBy =  $search['searchItems']['sort_by'] == 'age' ? 'dob': $search['searchItems']['sort_by'];
                if ($sortBy == 'dob') {
                    $search['searchItems']['sort_type'] =  $search['searchItems']['sort_type'] == 'asc' ? 'desc' : 'asc';
                }
                $query->orderBy($sortBy, $search['searchItems']['sort_type']);
            });

        foreach ($searchItems as $key => $value) {
            if ($key === 'age') {
                $query->whereRaw('(DATEDIFF("' . date('Y-m-d') . '",dob)/365) >= ' . $value)
                    ->when(request()->has('sort_by') && request('sort_by') == 'age' && request('sort_type') == 'asc',
                        function ($query) {
                        $query->orderBy('dob', 'DESC');
                    });
            } else {
                $query->where($key, '>=', $value)
                    ->when(! request()->has('sort_by'), function ($query) use ($key) {
                        $query->orderBy('key', 'ASC');
                    });
            }

        }

        return $query->paginate(20);
    }
}
