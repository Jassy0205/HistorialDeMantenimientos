<?php

namespace App\Http\Resources\api\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ObservationResource extends JsonResource
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
            'message'  => $this->message, #Concatenación: $this->firstname . ' '. $this->lastname
            'owner'  => $this->owner,
            'category' => $this->category,
            'creation_date'  => $this->updated_at 
        ];
    }
}
