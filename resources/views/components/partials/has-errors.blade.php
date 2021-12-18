@if ($errors->any())
    <div class="alert flex flex-row items-center bg-red-200 p-5 rounded border-b-2 border-red-300 my-6">
        <div class="alert-icon flex items-center justify-center h-10 w-10 flex-shrink-0">
            <span class="text-red-500">
                <i class="fas fa-exclamation-triangle fa-2x"></i>
            </span>
        </div>
        <div class="alert-content ml-4">
            <div class="alert-title font-semibold text-lg text-white">
                Advertencia
            </div>
            <div class="alert-description text-sm text-white">
                Por favor verifica que todos los campos estén correctos...
            </div>
        </div>
    </div>
@endif