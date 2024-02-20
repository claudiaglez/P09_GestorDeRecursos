<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipo;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tipo::create([

            'tipo' => 'Masterclass',
        ]);

        Tipo::create([
            
            'tipo' => 'Píldora',
        ]);

        Tipo::create([
            
            'tipo' => 'Live Coding',
        ]);

        Tipo::create([
            
            'tipo' => 'Transversal',
        ]);
    }
}
