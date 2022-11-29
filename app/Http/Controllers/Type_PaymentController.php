<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type_Payment;

class Type_PaymentController extends Controller
{
    public function index(Request $request)
    {
    $type_payments = Type_Payment::all();
       return view('admin.payments.index', compact('type_payments'));
    }
    public function create()
    {
        return view('admin.payments.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image'=> 'required',
            
        ]);
        $type_payments = Type_Payment::create(['name'=>$request->name,'image'=>$request->image],);
        session()->flash('success', 'New payment Added Successfully.');
        
        return redirect(route('type_payments.index'));
    }
    public function edit($id)
    {
        $type_payment =Type_Payment::find($id);
        return view('admin.payments.edit', compact('type_payment'));
    }
    public function update(Request $request, $id)
    {
        $validate=$request->validate([
            'name' => 'required',
            'image'=> 'required',
        ]);
        $type_payment = Type_Payment::find($id);
        $type_payment->name= $request->name;
        $type_payment->image=$request->image;
        $type_payment->save();
        session()->flash('success', ' type_payment updated Successfully.');
        // redirect user
        return redirect(route('type_payments.index'));
    }
    public function destroy($id)
    {
        $type_payment= Type_Payment::find($id);
        $type_payment->delete();
        session()->flash('success', 'Payment Deleted Successfully.');
        
        return redirect(route('type_payments.index'));
        
    }

}


