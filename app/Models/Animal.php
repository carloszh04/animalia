<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(AnimalTypes::class, 'animal_type_id', 'id');
    }

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'animal_doctor', 'animal_id', 'doctor_id');
    }
}
