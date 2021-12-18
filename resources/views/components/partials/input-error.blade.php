@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}><i class="fas fa-exclamation-triangle fa-lg"></i> {{ $message }}</p>
@enderror