<?php

namespace App\Services\Transaction\Sales;

use App\Models\Order;
use Carbon\Carbon;

class GenerateOrderCodeService
{
    public function generate()
    {
        $dt = Carbon::now()->format('Ymd');
        $digit = '0000';
        $prefix = 'INV-' . $dt;

        $current = Order::where('code', 'like', $prefix . '%')->max('code');

        if ($current != '') {
            $newDigit = substr($current, -4) + 1;
            $newDigit = substr($digit . $newDigit, -4);
        } else {
            $newDigit = $digit . 1;
            $newDigit = substr($newDigit, -4);
        }
        $newNumber = $prefix . $newDigit;

        return $newNumber;
    }
}
