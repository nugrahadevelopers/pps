@props(['id', 'name', 'text'])

<label for="{{ $id }}" class="inline-flex items-center">
    <input id="{{ $id }}" type="checkbox"
        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-sky-600 shadow-sm focus:ring-sky-600 dark:focus:ring-skytext-sky-600 dark:focus:ring-offset-gray-800"
        name="{{ $name }}">
    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ $text }}</span>
</label>
