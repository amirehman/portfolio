<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GeneralResource extends JsonResource
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
            'Intro' => $this->intro,
            'Picture' => $this->dp,
            'Company Image' => $this->company_image,
            'Facebook' => $this->facebook,
            'Twitter' => $this->twitter,
            'Instagram' => $this->instagram,
            'Github' => $this->github,
            'Stack Overflow' => $this->stackoverflow
        ];
    }
}
