<?php

namespace App\Http\Controllers;

use App\Customer\Contact;
use App\Customer\Customer;
use App\Home;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    public function index()
    {

 $customers = Customer::select(
    
    
'id','name','email','balance'




)->get();
return view('cView.view',compact('customers'));
        
    }

  
    public function create()
    {
        return view('cView.create');
    }

    
    public function store(CustomerRequest $request)
    {
        Customer::create([

  
'name'=>$request->name,
'email'=>$request->email,
'balance'=>$request->balance,





        ]);
        return redirect()->back()->with(['success'=>'تم اضافة العرض بنجاح']);
    }



public function contact_us(ContactRequest  $request){



    Contact::create([

  
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        
        
        
        
        
                ]);
                return redirect()->back()->with(['success'=>'تم اضافة العرض بنجاح']);


}

public  function getContact(){




    return view('cView.contactUs');
}


 
    public function show(Home $home)
    {
        //
    }

  
    public function edit(Home $home)
    {
        //
    }

   
    public function update(Request $request, Home $home)
    {
        //
    }

   
    public function destroy(Home $home)
    {
        //
    }


    
    // public function validateRequest($request){
        
    //     return $this->validate($request,['name'=>'required|string',
    //     'description'=>'required|min:3|max:500',
    //     'minutes'=>'required|integer']);
        


    // }
}





