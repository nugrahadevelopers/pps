@props(['label', 'icon', 'active'])

@php
    $classes = $active ?? false ? 'inline-flex items-center justify-between w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline bg-gray-100 scale-95 text-sky-600 group' : 'inline-flex items-center justify-between w-full px-4 py-2 mt-1 text-sm text-gray-500 transition duration-200 ease-in-out transform rounded-lg focus:shadow-outline hover:bg-gray-100 hover:scale-95 hover:text-sky-600 group';
@endphp

<li>
    <div @if ($active ?? false) x-data="{ open: true }" @else x-data="{ open: false }" @endif>
        <button class="{{ $classes }}" @click="open = ! open">
            <span class="inline-flex items-center text-base font-light">
                <i class="{{ $icon ?? 'fa-solid fa-print' }} w-4 h-4"></i>
                <span class="ml-4">
                    {{ $label ?? 'Dashboard' }}
                </span>
            </span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                class="inline w-5 h-5 ml-auto transition-transform duration-200 transform group-hover:text-accent rotate-0">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="p-2 pl-6 -px-px" x-show="open" @click.outside="open = false" style="display: none;">
            <ul>
                {{ $slot }}
            </ul>
        </div>
    </div>
</li>
