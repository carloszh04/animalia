<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Doctor;
use App\Models\Animal;
use Livewire\WithPagination;

class AnimalsDoctors extends Component
{
    use WithPagination;

    protected $queryString = [
        'perPage' => ['except' => '5']
    ];
    public $perPage = '5';
    protected $listeners = ['render' => 'render', 'delete' => 'delete'];
    // Update
    public $open = false;
    public $doctor;
    public $animal_id;
    protected $rules = [
        'animal_id' => 'required'
    ];
    // Loading
    public $modal_title;
    public $action;

    public function mount(Doctor $doctor)
    {
        $this->doctor = $doctor;
    }

    public function render()
    {
        $pets = Animal::orderBy('name')->get();
        $animals = $this->doctor->animals()->paginate($this->perPage);
        return view('livewire.animals-doctors', [
            'animals' => $animals,
            'pets' => $pets
        ])->layout('components.layouts.app');
    }

    public function create()
    {
        $this->modal_title = 'Asignar Mascota';
        $this->action = 'create';
        $this->open = true;
    }

    public function save()
    {
        $this->validate();
        $this->doctor->animals()->attach($this->animal_id);
        $this->reset(['open']);
        $this->emit('alert', [
            'icon' => 'success',
            'title' => 'La asignación se realizó correctamente'
        ]);
    }

    public function delete($animal_id)
    {
        $this->doctor->animals()->detach($animal_id);
    }
}
