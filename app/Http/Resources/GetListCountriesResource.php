<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GetListCountriesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request): array
    {
        $data = [];
        $data = [
            'slug' => $this->slug,
            'title' => $this->title,
            'iso-code-2' => $this->iso_code_2,
            'iso-code-3' => $this->iso_code_3
        ];

        return $data;
    }
}
