<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stack;

class StacksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stack::create([

            'stack' => 'Frontend',
        ]);

        Stack::create([
            
            'stack' => 'Backend',
        ]);

        Stack::create([
            
            'stack' => 'Full-Stack',
        ]);

    
    }
}
