<x-app-layout breadCrumbsName="transaction.invoice">
    <x-slot name="title">{{ __('transaction_module.invoice_page_title') }}</x-slot>
    <x-theme.container>
        @can('sales_transaction_create')
            <div class="flex items-center justify-end">
                <a href="{{ route('panel.admin.transactions.sales.index') }}"
                    class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-sky-600 rounded-md dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:bg-sky-700 hover:bg-sky-600 focus:outline-none focus:bg-sky-600 focus:ring focus:ring-sky-300 focus:ring-opacity-50">
                    <i class="fa-solid fa-square-plus"></i>

                    <span>Transaksi Baru</span>
                </a>
            </div>
        @endcan

        <div class="mt-5 overflow-hidden">
            {{ $dataTable->table() }}
        </div>
    </x-theme.container>

    @push('js')
        {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    @endpush
</x-app-layout>
