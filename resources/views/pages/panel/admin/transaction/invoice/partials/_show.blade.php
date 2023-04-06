<x-theme.modal modalTitle="Detail Order" modalOpenBtnIcon="fa-regular fa-eye"
    customColor="space-x-0 bg-sky-600 hover:bg-sky-700 text-sky-50">
    <div class="mt-5">
        <div>Pelanggan: {{ $order->customer_name }}</div>
    </div>
    <table class="mt-5 w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Item
                </th>
                <th scope="col" class="px-6 py-3 text-right">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3 text-right">
                    QTY
                </th>
                <th scope="col" class="px-6 py-3 text-right">
                    Discount
                </th>
                <th scope="col" class="px-6 py-3 text-right">
                    Total
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->orderItems as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $item->item_name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $item->price }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->qty }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->discount }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->total }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-theme.modal>
