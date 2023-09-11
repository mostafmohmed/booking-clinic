<?php

namespace Database\Seeders;

use App\Models\Contactus;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Majorseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Contactus::factory(10)->create(); 
      // Doctor::factory(10)->create(); 
      
    }
}
