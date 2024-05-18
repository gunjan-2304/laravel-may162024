<?php

namespace Database\Seeders;
use App\Models\City;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
   
   
    /**
     * Run the database seeds.
     * 
     */
    public function run(): void
    {
        // User::factory(10)->create();

        City::factory()->create([
            'name' => 'ajmer',
            'snmae' => 'rj',
            'citytype' => 'urban',
            'pincode' => '123123'
        ]);
    }
}
