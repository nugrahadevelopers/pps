<x-app-layout breadCrumbsName="user">
    <x-slot name="title">{{ __('user_module.page_title') }}</x-slot>
    <x-theme.container>
        <div class="mt-5 overflow-hidden">
            {{ $dataTable->table() }}
        </div>
    </x-theme.container>

    @push('js')
        {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    @endpush
</x-app-layout>
