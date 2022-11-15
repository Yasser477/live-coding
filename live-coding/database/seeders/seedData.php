<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\apprentice;
use App\Models\Brief;
use Carbon\Carbon;
use Dotenv\Util\Str;
use Illuminate\Database\Seeder;

class seedData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($b = 0; $b<5; $b++){

            Brief::create([
            'name' => Str::random(5),
            'description' => Str::random(5),
            'start_date' =>carbon::now(),
            'end_date' =>Carbon::now()
    
            ]);
        
            apprentice::create([
            
            'name' => Str::random(5),
            'secondName' => Str::random(5),
            'email' => Str::random(5)
            
                
            ]);
    
           }
    }
}
