<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animal_types')->insert([
            ['name' => 'Reptil'],
            ['name' => 'Mamifero'],
            ['name' => 'Anfibio']
        ]);
    }
}
