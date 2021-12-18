<div>
    <section id="hero-area" class="bg-blue-400 pt-48 pb-10">
		<div class="container">
			<div class="flex justify-between">
				<div class="w-full text-center">
					<h2 class="text-4xl font-bold leading-snug text-blue-50 mb-10 wow fadeInUp" data-wow-delay="1s">
						Mascotas Asignadas
					</h2>
				</div>
			</div>
		</div>
  	</section>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <div class="px-6 py-4">
                                    <x-partials.info-button wire:click="create">
                                        <i class="fas fa-plus"></i> Asignar MAscota
                                    </x-partials.info-button>
                                </div>
                                <div class="flex wrap bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                                    <div class="rounded-md shadow-sm mt1 mx-4 block">
                                        <select wire:model="perPage" class="outline-none text-gray-500 text-sm">
                                            <option value="5">5 por página</option>
                                            <option value="10">10 por página</option>
                                            <option value="15">15 por página</option>
                                            <option value="25">25 por página</option>
                                            <option value="50">50 por página</option>
                                            <option value="100">100 por página</option>
                                        </select>
                                    </div>
                                </div>
                                @if (count($animals))
                                    <section class="container mx-auto p-6 font-mono">
                                        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                                            <div class="w-full overflow-x-auto">
                                                <table class="w-full">
                                                    <thead>
                                                        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                                            <th class="px-4 py-3 cursor-pointer">
                                                                Mascota
                                                            </th>
                                                            <th class="px-4 py-3">Opciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="bg-white">
                                                        @foreach ($animals as $item)
                                                            <tr class="text-gray-700">
                                                                <td class="px-4 py-3 text-sm border">
                                                                    <p class="text-semibold">{{ $item->name }}</p>
                                                                    <p class="text-sm">{{ $item->type->name }}</p>
                                                                </td>
                                                                <td class="px-4 py-3 text-sm border text-center">
                                                                    <x-partials.danger-button title="Eliminar" wire:click="$emit('deleteAnimal', {{ $item->id }})">
                                                                        <i class="fas fa-trash-alt fa-lg"></i>
                                                                    </x-partials.danger-button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        @if($animals->hasPages())
                                            <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                                                {{ $animals->links() }}
                                            </div>
                                        @endif
                                    </section>
                                @else
                                    <x-partials.table-message class="alert-left-danger" page="{{ $page }}" perPage="{{ $perPage }}" />
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Modal Update --}}
    <x-partials.dialog-modal wire:model="open" maxWidth="7xl">
        {{-- Title --}}
        <x-slot name="title">
            {{ $modal_title }}
        </x-slot>
        {{-- Content --}}
        <x-slot name="content">
            <div class="grid grid-cols-1 gap-4">
                <div class="mb-4">
                    <x-partials.label value="Animal" />
                    <select name="animal_id" id="animal_id" class="form-control w-full" wire:model.defer="animal_id">
                        <option value="">-- Seleccionar --</option>
                        @foreach ($pets as $item)
                            <option value="{{ $item->id }}">
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-partials.input-error for="animals.animal_id" />
                </div>
            </div>
            <x-partials.has-errors />
        </x-slot>
        {{-- Footer --}}
        <x-slot name="footer">
            <x-partials.danger-button wire:click="$set('open', false)">
                <i class="fas fa-ban fa-lg"></i> Cancelar
            </x-partials.danger-button>
            @if ($action == 'edit')
                <x-partials.success-button wire:click="update" wire:loading.attr="disabled" wire:target="update, image" class="disabled:opacity-25">
                    <i class="far fa-save fa-lg"></i> Actualizar
                </x-partials.success-button>
            @endif
            @if ($action == 'create')
                <x-partials.success-button wire:click="save" wire:loading.attr="disabled" wire:target="save, image" class="disabled:opacity-25">
                    <i class="far fa-save fa-lg"></i> Guardar
                </x-partials.success-button>
            @endif
        </x-slot>
    </x-partials.dialog-modal>

    @push('scripts')
        <script>
            Livewire.on('deleteAnimal', animalId => {
                Swal.fire({
                    title: '¿Estás Seguro?',
                    text: "No podrás revertir la acción!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, hazlo!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emitTo('animals-doctors', 'delete', animalId);
                        Swal.fire(
                            'Eliminado!',
                            'El animal se eliminó satisfactoriamente.',
                            'success'
                        )
                    }
                })
            });
        </script>
    @endpush
</div>