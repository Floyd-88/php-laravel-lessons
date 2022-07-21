<?php

namespace App\Http\Resources\Hobbie;

use Illuminate\Http\Resources\Json\JsonResource;

class HobbieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name_hobbie' => $this->name_hobbie,
            'category_hobbie_id' => $this->category_hobbie_id,
            // 'tags' => '',
        ];
    }
}
