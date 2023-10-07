@props(['active'])

@php
    $classes = $active ?? false ? 'block w-full px-4 py-2 text-left text-sm leading-5 text-blue-700 hover:bg-slate-100 focus:outline-none focus:bg-slate-100 transition duration-150 ease-in-out' : 'block w-full px-4 py-2 text-left text-sm leading-5 text-slate-700 hover:bg-slate-100 focus:outline-none focus:bg-slate-100 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
