<x-app-layout breadCrumbsName="customer">
    <x-slot name="title">{{ __('customer_module.page_title') }}</x-slot>
    <x-theme.container>
        @can('customer_create')
            <div class="flex items-center justify-end">
                @include('pages.panel.admin.customer.partials._create')
            </div>
        @endcan

        <!-- Session Status -->
        <x-theme.session-status class="mt-5 p-2 bg-sky-400 text-white rounded" :status="session('status')" />

        <div class="mt-5 overflow-hidden">
            {!! $dataTable->table() !!}
        </div>
    </x-theme.container>

    @push('js')
        {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    @endpush
</x-app-layout>
