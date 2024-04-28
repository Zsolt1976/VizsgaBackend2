<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'id'=>$this->id,
            'name'=>$this->name,
            'quantity_unit'=>$this->quantity_unit,
            'unit'=>$this->unit,
            'type_id'=>$this->type_id,
            'invQty'=>$this->invQty,
            'other'=>$this->other,
            'manufacturer_id'=>$this->manufacturer_id,
            'consumable'=>$this->consumable,
        ];
    }
}
