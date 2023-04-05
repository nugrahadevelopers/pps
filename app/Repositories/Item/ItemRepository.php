<?php

namespace App\Repositories\Item;

use App\Models\Item;

class ItemRepository implements ItemInterface
{
    protected $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function getAll()
    {
        $data = $this->item
            ->when(request()->search, function ($query) {
                if (!is_array(request()->search)) {
                    $query->where('name', 'LIKE', '%' . request()->search . '%');
                }
            })
            ->orderBy('created_at', 'DESC');

        return $data->get();
    }
}
