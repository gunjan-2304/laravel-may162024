<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car; 

class CarSeeder extends Seeder
{
    //1. property
    //2. contructor
    //3. Method
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::Create([
            'brand_name'=>'bmw',
        ]);
    }
}
