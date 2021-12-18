<a {{ $attributes->merge(['href' => '#', 'target' => '', 'class' => 'inline-flex items-center justify-center px-4 py-2 bg-black border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-black-700 focus:outline-none focus:border-black-700 focus:ring focus:ring-black-500 active:bg-black-600 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</a>