<?php

namespace App\Http\Controllers;

use App\Models\Landing_Page;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Pakage;
use App\Models\Type_Payment;

class OrderController extends Controller
{
  public function index(){
    $orders=Order::OrderBy('created_at','desc')->paginate(5);
    return view('admin.orders.index',compact('orders'));
  }

  public function create(){
    $orders=Order::all();
    $pakages=Pakage::all();
    $landing_pages=Landing_Page::first();
    
    return view('get',compact('landing_pages','orders','pakages'));
  }

  public function store(Request $request){
    
    $this->validate($request, [
        'firstname' => 'required',
        'lastname'=> 'required',
        'email'=> 'required',
        'mobile'=> 'required',
        'passport'=> 'required',
        'discount'=> 'required',
        'pakage_id'=> 'required',
        'type_payment_id'=> 'required',
    ]);
    $orders = Order::create([
        'firstname'=>$request->firstname,
        'lastname'=>$request->lastname,
        'email'=>$request->email,
        'mobile'=>$request->mobile,
        'passport'=>$request->passport,
        'discount'=>$request->discount,
        'pakage_id'=>$request->pakage_id,
        'type_payment_id'=>$request->type_payment_id,

        ]);
        
        $orders->save();
        session()->flash('success', 'New Order Added Successfully.');
        return view('index');
        
    
  }



}