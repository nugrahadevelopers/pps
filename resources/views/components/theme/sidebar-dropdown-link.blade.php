@props(['icon', 'url', 'active'])

@php
    $classes = $active ?? false ? 'inline-flex items-center w-full p-2 pl-3 text-sm font-light text-gray-500 rounded-lg text-sky-600 group bg-gray-50' : 'inline-flex items-center w-full p-2 pl-3 text-sm font-light text-gray-500 rounded-lg hover:text-sky-600 group hover:bg-gray-50';
@endphp

<li>
    <a href="{{ $url ?? '#' }}" class="{{ $classes }}">
        <span class="inline-flex items-center w-full">
            <i class="{{ $icon ?? 'fa-regular fa-file' }} w-4 h-4"></i>
            <span class="ml-4">
                {{ $slot }}
            </span>
        </span>
    </a>
</li>
