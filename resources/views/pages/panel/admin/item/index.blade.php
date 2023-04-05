<x-app-layout breadCrumbsName="item">
    <x-slot name="title">{{ __('item_module.page_title') }}</x-slot>
    <x-theme.container>
        <div class="flex items-center justify-end">
            @include('pages.panel.admin.item.partials._create')
        </div>

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
