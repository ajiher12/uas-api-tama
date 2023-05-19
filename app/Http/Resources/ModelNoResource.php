<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ModelNoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' =>     $this->id,
            'product_id' => $this->product_id,
            'serial_no' => $this->serial_no,
            'prod_date' => $this->prod_date,
            'warranty_date' => $this->warranty_date,
            'warranty_duration' => $this->warranty_duration,
            'used' => $this->used,
        ];
    }
}
