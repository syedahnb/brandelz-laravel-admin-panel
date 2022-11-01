@props(['active', 'as' => 'Link'])

@php
    $classes = ($active ?? false)
                ? 'group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium  hover:bg-chestnut-50 hover:text-chestnut-900 bg-chestnut-100 text-chestnut-900'
                : 'group flex w-full items-center rounded-md py-2 pl-11 pr-2 text-sm font-medium text-chestnut-600 hover:bg-chestnut-50 hover:text-chestnut-900';
@endphp

<{{ $as }} {{ $attributes->class($classes) }}>
{{ $slot }}
</{{ $as }}>
