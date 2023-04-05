@props(['icon', 'url', 'active'])

@php
    $classes = $active ?? false ? 'inline-flex items-center w-full px-4 py-2 mt-1 text-base font-light text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline bg-gray-100 scale-95 text-sky-600' : 'inline-flex items-center w-full px-4 py-2 mt-1 text-base font-light text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-sky-600';
@endphp

<li>
    <a class="{{ $classes }}" href="{{ $url }}">
        <i class="{{ $icon }} w-4 h-4"></i>
        <span class="ml-4">
            {{ $slot }}
        </span>
    </a>
</li>
