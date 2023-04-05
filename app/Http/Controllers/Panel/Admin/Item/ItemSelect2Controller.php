<?php

namespace App\Http\Controllers\Panel\Admin\Item;

use App\Http\Controllers\Controller;
use App\Repositories\Item\ItemInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ItemSelect2Controller extends Controller
{
    protected $itemInterface;

    public function __construct(ItemInterface $itemInterface)
    {
        $this->itemInterface = $itemInterface;
    }

    public function getAll(Request $request)
    {
        $items = $this->itemInterface->getAll();
        $select2_data = new Collection();

        foreach ($items as $item) {
            $select2_data->push(['id' => $item->id, 'text' => $item->name]);
        }

        return response()->json($select2_data);
    }
}
