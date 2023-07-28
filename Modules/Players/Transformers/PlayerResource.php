<?php

namespace Modules\Players\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;
use Modules\Teams\Transformers\TeamResource;

class PlayerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => 'https://randomuser.me/api/portraits/men/'.random_int(5, 50).'.jpg',
            'team' => TeamResource::make($this->team),
            'dob' => $this->dob,
            'age' => $this->age,
            'position' => $this->position,
            'height' => $this->height,
            'matches' => $this->matches,
            'sokaScore' => $this->soka_score,
            'attacking' => $this->attacking,
            'defensive' => $this->defensive,
            'passing' => $this->passing,
            'possession' => $this->possession,
            'shirtNumber' => random_int(1, 30),
        ];
    }
}
