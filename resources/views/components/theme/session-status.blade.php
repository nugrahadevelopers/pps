@props(['status'])

@if ($status)
    <div
        {{ $attributes->merge(['class' => 'flex items-center font-medium text-sm tracking-wide text-green-600 dark:text-green-400']) }}>
        <i class="fa-solid fa-circle-info mr-2"></i>
        {{ $status }}
    </div>
@endif
