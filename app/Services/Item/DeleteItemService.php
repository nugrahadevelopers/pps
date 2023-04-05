<?php

namespace App\Services\Item;

use App\Models\Item;

class DeleteItemService
{
    public function delete(Item $item)
    {
        $item->delete();
        return true;
    }
}
