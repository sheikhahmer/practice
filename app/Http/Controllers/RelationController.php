<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Company;
use App\Models\Post;
use App\Models\Add;
use App\Models\Customer;
use Illuminate\Http\Request;

class RelationController extends Controller
{
    // public function index(){
    //     return Member::find(2)->CompanyData; 
    // }

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
    
        $titles = Post::select('title')->distinct()->get();

        // dd($titles);

    if(isset($_GET['search']) ||  isset($_GET['title'])){
        $title  = $_GET['title'];
        $search = $_GET['search'];

        $posts = Post::where('title', $title)
                        ->orWhere('description', 'LIKE', "%{$search}%")
                        ->paginate(5);

    }

    else{
        $posts = Post::paginate(5);
    }
               
        return view('index', compact('posts','titles'));
    }
   
    public function programe(Request $request){

        // $grade = 50;
       
        // if($grade == 80){
        //     $result = "pass by 90";
        // }
        // else if($grade == 90){
        //     $result = "pass by 80";
        // } 
        // else{
        //     $request = "fail";
        // }

        $grade = 90;

        if($grade == 90){
        $result = "pass by A";
       }
    
        else if($grade == 80){
            $result = "pass by B";
        }

        else{
            $result = "fail";
        }
        // dd($result);
    return view('programe');
    
    }

    public function store(Request $request){

        $request->validate([
            'grade' => 'required|min:3'
        ]);
        // dd($request);

        if($request->grade <=90){
            return ('pass by A');
        }
        elseif($request->grade <=80){
            return ('pass by B');
        }
        else{
            return ('Fail');
        }
    }

    public function string(){
        return view('string');
    }
  

    public function passing_data(){

        // $data = Customer::with('company')->first();
        // dd($data->company->name);
        $customer = [

            'ahmer',
            'ahmer',
            'ahmer',
            'ahmer',
            'ahmer',
        ];
 
        return view('passing_data', [

        'data' => $customer,

    ]);

    }

    public function add(Request $request){
        //  dd($request);
        $company = Company::all();
        $data = request()->validate([

            'name'          => 'required',
            'cnic'          => 'required',
            'address'       => 'required',
            'contact_no'    => 'required',
        ]);
        // another way to add data t0 database by using the variable where we have store the validation fields
         Add::create($data);

    return back();
       
    }

    public function fetch_customers(){
        $customers = Customer::all();
        // $data = Customer::with('company')->first();
      return view('fetch_customers',compact('customers'));
    }


    


}






