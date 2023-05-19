<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionDetailResource extends JsonResource
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
            'transaction_id' => $this->transaction_id,
            'item_id' => $this->item_id,
            'serial_no' => $this->serial_no,
            'price' => $this->price,
            'discount' => $this->discount,
        ];
    }
}
