@props(['wTarget', 'lottie', 'message' => 'Espere un momento por favor...'])

<div wire:loading wire:target="{{ $wTarget }}" class="text-center text-blue-700 px-4 py-3 mt-4 w-full">
    <lottie-player src="{{ asset('lotties/' . $lottie . '.json') }}" background="transparent" speed="2" style="width: 150px; height: 150px;" class="lottie-center" loop autoplay></lottie-player>
    <span class="block sm:inline">{{ $message }}</span>
</div>