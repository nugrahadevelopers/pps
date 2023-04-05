@props(['name', 'data'])

@if ($data != null)
    {{ Breadcrumbs::render($name, $data) }}
@else
    {{ Breadcrumbs::render($name) }}
@endif
