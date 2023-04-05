<x-app-layout breadCrumbsName="category-item">
    <x-slot name="title">{{ __('item_module.category_page_title') }}</x-slot>
    <x-theme.container>
        <div class="mt-5 overflow-hidden">
            {{ $dataTable->table() }}
        </div>
    </x-theme.container>

    @push('js')
        {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    @endpush
</x-app-layout>
