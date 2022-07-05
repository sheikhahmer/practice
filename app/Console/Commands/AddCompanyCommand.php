<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Company;

class AddCompanyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contact:company';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add New Company';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $name= $this->ask('What Is The Company Name');
        $phone= $this->ask('What Is The Company Phone No');

        if($this->confirm('are you ready to insert "' . $name .'"?')){
            
            $company =Company::create([
                // id we wan too save company name without message we use argument
                // 'name'          => $this->argument('name'),
                // 'phone'          => $this->argument('phone'),

                // if we want to mesages too we use this way
                'name'          =>$name,
                'phone'         =>$phone,
              
            ]);

            return $this->info('Company Added' . $company->name);
    
        }

        // $this->info('phone');
     
        $this->info('Added:' . $company->name);
        // $this->warn('warning');
        // $this->error('error');
    }
}
