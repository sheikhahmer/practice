<?php

namespace App\Providers;

use App\Providers\NewCustomerAdded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class WelcomeNewListener implements ShouldQueue{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Providers\NewCustomerAdded  $event
     * @return void
     */
    public function handle(NewCustomerAdded $event)
    {
        // sleep(10);/]] 

        for($i=0; $i<=5; $i++){
            
            $data = request()->validate([

                'name'          => 'ahmer',
                'email'          => 'xcode@example.com',
                'message'       => 'welcome',
            ]);
    
            Contact::create($data);
        }
    }
}
