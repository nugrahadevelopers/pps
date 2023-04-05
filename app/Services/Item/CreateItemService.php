<?php

namespace App\Services\Item;

use App\Models\Item;

class CreateItemService
{
    public function create(array $data): Item
    {
        $item = Item::create([
            'name' => $data['name'],
            'price' => $data['price'],
            'description' => $data['description'],
        ]);

        return $item;
    }
}
