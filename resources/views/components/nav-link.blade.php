@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex  items-center px-1 pt-1 border-b-2 border-black  dark:border-black text-sm font-bold leading-5 text-orange-900 dark:text-orange-400 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent hover:bg-orange-300 hover:rounded-lg hover:translate-x-4 hover:translate-y-2 hover:duration-50 text-sm font-bold leading-5 text- dark:text-orange-500  hover:text-green-400  dark:hover:text-black hover:border-black dark:hover:border-orange-300 focus:outline-none focus:text-white dark:focus:text-orange-400 focus:border-orange-300 dark:focus:border-orange-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
