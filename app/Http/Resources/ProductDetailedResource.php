<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductDetailedResource extends JsonResource
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
            'type_id'=>new TypeCollection($this->type),
            'invQty'=>$this->invQty,
            'other'=>$this->other,
            'manufacturer_id'=>new ManufacturerCollection($this->manufacturer),
            'consumable'=>$this->consumable,
        ];
    }
}
