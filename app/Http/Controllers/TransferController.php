<?php

namespace App\Http\Controllers;

use App\Customer\Customer;
use App\Customer\Transfer;
use App\Http\Requests\CustomerRequest;
use App\Http\Requests\TransferRequest;
use Illuminate\Http\Request;

class TransferController extends Controller
{



    public function index()
    {

 $customers = Customer::select(
    
    
'id','name','email','balance'




)->get();
return view('cView.viewTransfer',compact('customers'));
        
    }

public function  allTransfer(){



    $transfers = Transfer::select(
    
    
        'id','sender_name','reciver_name','amount','date'
        
        
        
        
        )->get();
        return view('cView.allTransfer',compact('transfers'));






}

    public function store(TransferRequest $request)
    {
        // $amount = $request->amount;
        // $c_balance = $request->balance  ;
        // $sender_remaining =   $c_balance - $amount;
        // if ($amount >  $c_balance || $amount <= 0) {
        //     return redirect()->back()->with('failed', 'Check Transfer Amount!!!');
        // }else{
        Transfer::create([

  
'sender_name'=>$request->sender_name,
'reciver_name'=>$request->reciver_name,
'amount'=>$request->amount,






        ]);

    
        return redirect()->back()->with(['success'=>'تم اضافة العرض بنجاح']);
    
    //}
    }



    public function create()
    {
        return view('cView.viewTransfer');
    }


}
