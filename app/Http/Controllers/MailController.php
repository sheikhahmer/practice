<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Events\NewCustomerAdded;


class MailController extends Controller
{
    public function contact_us(){
        
        return view('contact.contact_us');
    }

    public function add_contact(Request $request){
        
        dd($request->getIp);
        
        $data = request()->validate([

            'name'          => 'required',
            'email'          => 'required|email',
            'message'       => 'required',
        ]);

        Contact::create($data);

        event(new NewCustomerAdded($data));
        
        return back();
    }


    // this is used to get ip address 

    // $this->getId

      public function getIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
        return request()->ip(); // it will return server ip when no client ip found
    }
    
}
