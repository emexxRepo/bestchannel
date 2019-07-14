<?php

namespace App\Http\Resources;

use App\Companies;
use Illuminate\Http\Resources\Json\JsonResource;

class OpportunityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'company_id' => Companies::find($this->company_id),
            'name' => $this->name,
            'photo' => $this->photo,
            'slug' => $this->slug,
            'summary' => $this->summary,
            'price' => $this->price
        ];
    }
}
