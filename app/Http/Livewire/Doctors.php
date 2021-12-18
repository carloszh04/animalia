<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Doctor;
use Livewire\WithPagination;

class Doctors extends Component
{
    use WithPagination;

    protected $queryString = [
        'perPage' => ['except' => '5']
    ];
    public $perPage = '5';
    protected $listeners = ['render' => 'render', 'delete' => 'delete'];
    // Update
    public $open = false;
    public $doctors;
    protected $rules = [
        'doctors.name' => 'required',
        'doctors.age' => 'required',
        'doctors.email' => 'required',
        'doctors.phone' => 'required',
        'doctors.mobile' => 'required'
    ];
    // Loading
    public $modal_title;
    public $action;

    public function mount()
    {
        $this->doctors = new Doctor();
    }

    public function render()
    {
        $doctors_list = Doctor::paginate($this->perPage);
        return view('livewire.doctors', [
            'doctors_list' => $doctors_list
        ])->layout('components.layouts.app');
    }

    public function create()
    {
        $this->modal_title = 'Crear Doctor';
        $this->action = 'create';
        $this->doctors = new Doctor();
        $this->open = true;
    }

    public function save()
    {
        $this->validate();
        $this->doctors->save();
        $this->reset(['open']);
        $this->emit('alert', [
            'icon' => 'success',
            'title' => 'El doctor se creó correctamente'
        ]);
    }

    public function edit(Doctor $doctors)
    {
        $this->modal_title = 'Editar Doctor';
        $this->action = 'edit';
        $this->doctors = $doctors;
        $this->open = true;
    }

    public function update()
    {
        $this->validate();
        $this->doctors->save();
        $this->reset(['open']);
        $this->emit('alert', [
            'icon' => 'success',
            'title' => 'El doctor se actualizó correctamente'
        ]);
    }

    public function delete(Doctor $doctors)
    {
        $doctors->delete();
    }
}
