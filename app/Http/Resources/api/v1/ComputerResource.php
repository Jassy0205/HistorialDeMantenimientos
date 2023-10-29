<?php

namespace App\Http\Resources\api\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ComputerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        #return parent::toArray($request);
        return [
            'code' => $this->id,
            'name'  => $this->name, #Concatenación: $this->firstname . ' '. $this->lastname
            'details'  => $this->cpu . ' - '. $this->ram . ' GB',
            'owner'  => $this->owner,
            'creation_date'  => $this->updated_at 
        ];
    }
}
