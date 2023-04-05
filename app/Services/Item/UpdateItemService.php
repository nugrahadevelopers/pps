<?php

namespace App\Services\Item;

use App\Models\Item;

class UpdateItemService
{
    public function update(Item $item, array $data): Item
    {
        $item->update([
            'name' => $data['name'],
            'price' => $data['price'],
            'description' => $data['description'],
        ]);

        return $item;
    }
}
