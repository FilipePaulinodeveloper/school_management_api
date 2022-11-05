<?php

namespace Database\Seeders;

use App\Models\CalendarioEvento as ModelsCalendarioEvento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CalendarioEvento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\CalendarioEvento::factory()->count(5)->create();        

        ModelsCalendarioEvento::factory()
        ->count(5)        
        ->create();

        
    }
}
