@props(['background' => 'red', 'color' => 'white'])

<a {{ $attributes->merge(['href' => '#', 'target' => '', 'class' => 'border border-' . $background . ' text-' . $background . ' rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-' . $color . ' hover:bg-' . $background . '-700 focus:outline-none focus:shadow-outline']) }}>
    {{ $slot }}
</a>