@props(['title' => 'Selecciona un Documento', 'identifier' => '', 'model' => '', 'accept' => ''])
<div class="flex w-full items-center justify-center bg-grey-lighter">
    <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-white">
        <i class="far fa-folder-open fa-2x w-8 h-8"></i>
        <span class="mt-2 text-base leading-normal">{{ $title }}</span>
        <input type="file" id="{{ $identifier }}" class="hidden" wire:model="{{ $model }}" accept="{{ $accept }}" />
    </label>
</div>