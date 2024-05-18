<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void 
    {
        DB::table('animal')->insert([
            
                                     ['name'=>'cow', 
                                    'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
                                    'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
                                    ],

                                      ['name'=>'dog', 
                                    'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
                                    'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
                                    ],

                                      ['name'=>'animal', 
                                    'created_at'=>DB::raw('CURRENT_TIMESTAMP'),
                                    'updated_at'=>DB::raw('CURRENT_TIMESTAMP')
                                      ]                              
                                    
    ]);
    }
}