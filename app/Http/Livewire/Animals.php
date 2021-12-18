<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Animal;
use App\Models\AnimalTypes;
use Livewire\WithPagination;

class Animals extends Component
{
    use WithPagination;

    protected $queryString = [
        'perPage' => ['except' => '5']
    ];
    public $perPage = '5';
    protected $listeners = ['render' => 'render', 'delete' => 'delete'];
    // Update
    public $open = false;
    public $animals;
    protected $rules = [
        'animals.animal_type_id' => 'required',
        'animals.name' => 'required',
        'animals.age' => 'required',
        'animals.owner' => 'required',
        'animals.comments' => 'required'
    ];
    // Loading
    public $modal_title;
    public $action;

    public function mount()
    {
        $this->animals = new Animal();
    }

    public function render()
    {
        $animal_types = AnimalTypes::orderBy('name')->get();
        $animals_list = Animal::paginate($this->perPage);
        return view('livewire.animals', [
            'animals_list' => $animals_list,
            'animal_types' => $animal_types
        ])->layout('components.layouts.app');
    }

    public function create()
    {
        $this->modal_title = 'Crear Animal';
        $this->action = 'create';
        $this->animals = new Animal();
        $this->open = true;
    }

    public function save()
    {
        $this->validate();
        $this->animals->save();
        $this->reset(['open']);
        $this->emit('alert', [
            'icon' => 'success',
            'title' => 'El animal se creó correctamente'
        ]);
    }

    public function edit(Animal $animals)
    {
        $this->modal_title = 'Editar Animal';
        $this->action = 'edit';
        $this->animals = $animals;
        $this->open = true;
    }

    public function update()
    {
        $this->validate();
        $this->animals->save();
        $this->reset(['open']);
        $this->emit('alert', [
            'icon' => 'success',
            'title' => 'El animal se actualizó correctamente'
        ]);
    }

    public function delete(Animal $animals)
    {
        $animals->delete();
    }
}
