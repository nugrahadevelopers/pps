<x-app-layout>
    <x-slot name="title">{{ __('dashboard.page_title') }}</x-slot>

    <x-theme.container>
        Hallo Selamat Datang {{ auth()->user()->name }}
    </x-theme.container>
</x-app-layout>
