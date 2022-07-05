<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Factory;
use App\Models\Company;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  factory(Company::class, 3)->create();
        //  $users = Company::factory()->count(20)->create();
        for($i=0; $i<5; $i++){
            
            Company::create([

                'name' => 'A New Hope',
                'phone' => '123-123-12244',
                
            ]);  
        }
        
    }
}
