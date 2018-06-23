<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExperienceResource extends JsonResource
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
            'Position' => $this->title,
            'Company' => $this->company,
            'Start Date' => $this->start_date,
            'End Date' => $this->end_date,
            'Detail' => $this->detail
        ];
    }
}
