<x-app-layout breadCrumbsName="transaction.sales">
    <x-slot name="title">{{ __('transaction_module.sales_page_title') }}</x-slot>
    <x-theme.container>
        <div class="flex flex-col md:flex-row md:justify-between">
            <div class="border-b border-gray-300 pb-4 mb-4 md:border-b-0 md:pb-0 md:mb-0">
                <h3 class="font-semibold">Transaksi Baru</h3>
                <div class="font-light text-sm">{{ \Carbon\Carbon::parse(now())->format('d M Y') }}</div>
            </div>
            <div>
                <h3 class="font-semibold text-xl">#{{ $order_code }}</h3>
                <label for="customer-id"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pelanggan</label>
                <select id="customer-id" data-url="{{ route('panel.admin.customers.select2-dropdown') }}"
                    style="width: 100%"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500">
                </select>
            </div>
        </div>
        <div class="mt-5">
            <h3>Pilih Item</h3>
            <div class="w-full lg:w-1/2 mt-1 flex items-center gap-2">
                <div class="w-3/5">
                    <select id="item-id" data-url="{{ route('panel.admin.items.select2-dropdown') }}"
                        style="width: 100%"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500">
                    </select>
                </div>
                <input type="number" id="qty" name="qty" value="0"
                    class="w-1/5 text-right bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-500 focus:border-sky-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500">
                <button id="add-item-btn" data-url="{{ route('panel.admin.cart.add') }}"
                    class="w-1/5 flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-sky-600 rounded-md dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:bg-sky-700 hover:bg-sky-600 focus:outline-none focus:bg-sky-600 focus:ring focus:ring-sky-300 focus:ring-opacity-50">Tambah</button>
            </div>
        </div>
    </x-theme.container>

    <x-theme.container>
        <div id="customer-cart-wrapper" data-url="{{ url('/admin/cart/get/') }}" class="hidden">
            <div class="pb-4 border-b border-gray-200">
                <h3 class="text-lg">Cart</h3>
            </div>
            <div class="relative overflow-x-auto mt-2">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
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
                    <tbody id="cart-table-body">
                    </tbody>
                </table>
            </div>
            <div class="mt-6 flex flex-col items-end justify-end gap-2">
                <div class="flex items-center gap-2">
                    <label for="subtotal" class="">Subtotal</label>
                    <input type="number" id="subtotal" name="subtotal" value="0" readonly
                        class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm text-right rounded-lg focus:ring-sky-500 focus:border-sky-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500">
                </div>
                <div class="flex items-center gap-2">
                    <label for="discount" class="">Discount</label>
                    <input type="number" id="discount" name="discount" value="0"
                        class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm text-right rounded-lg focus:ring-sky-500 focus:border-sky-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500">
                </div>
                <div class="flex items-center gap-2">
                    <label for="total" class="">Total</label>
                    <input type="number" id="total" name="total" value="0" readonly
                        class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm text-right rounded-lg focus:ring-sky-500 focus:border-sky-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500">
                </div>
                <button type="button" id="save-transaction-btn"
                    data-url="{{ route('panel.admin.transactions.sales.save-transaction') }}"
                    data-urlsuccess="{{ route('panel.admin.transactions.invoice.index') }}"
                    data-ordercode="{{ $order_code }}"
                    class="w-full md:w-1/4 flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-sky-600 rounded-md dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:bg-sky-700 hover:bg-sky-600 focus:outline-none focus:bg-sky-600 focus:ring focus:ring-sky-300 focus:ring-opacity-50">Simpan</button>
            </div>
        </div>
    </x-theme.container>

    @push('js')
        <script src="{{ asset('assets/js/panel/admin/transaction/sales/index.js') }}"></script>
    @endpush
</x-app-layout>
